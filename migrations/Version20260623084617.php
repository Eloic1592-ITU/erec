<?php

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260623084617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout campagnes, positions multiples par candidature, backfill des données existantes';
    }

    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);

        $this->addSql("ALTER session SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }

    public function up(Schema $schema): void
    {
        // 1) Nouvelles tables (inchangé)
        $this->addSql('CREATE SEQUENCE "EREC_CAMPAIGN_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_USER_POSITION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE "EREC_CAMPAIGN" (id NUMBER(10) NOT NULL, title VARCHAR2(255) NOT NULL, description CLOB DEFAULT NULL NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, created_at DATE NOT NULL, updated_at DATE DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN "EREC_CAMPAIGN".created_at IS \'(DC2Type:oracle_date)\'');
        $this->addSql('COMMENT ON COLUMN "EREC_CAMPAIGN".updated_at IS \'(DC2Type:oracle_date)\'');
        $this->addSql('CREATE TABLE "EREC_USER_POSITION" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, position_id NUMBER(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_54113136A76ED395 ON "EREC_USER_POSITION" (user_id)');
        $this->addSql('CREATE INDEX IDX_54113136DD842E46 ON "EREC_USER_POSITION" (position_id)');
        $this->addSql('ALTER TABLE "EREC_USER_POSITION" ADD CONSTRAINT FK_54113136A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_USER_POSITION" ADD CONSTRAINT FK_54113136DD842E46 FOREIGN KEY (position_id) REFERENCES "EREC_POSITION" (id)');

        $this->addSql('DROP INDEX uniq_4679e0caa76ed395');

        // 2) Nouvelles colonnes ajoutées EN NULLABLE d'abord (tables non vides en prod)
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (campaign_id NUMBER(10) DEFAULT NULL, position_id NUMBER(10) DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_POSITION ADD (campaign_id NUMBER(10) DEFAULT NULL, closing_date DATE DEFAULT NULL)');
        $this->addSql('COMMENT ON COLUMN EREC_POSITION.closing_date IS \'(DC2Type:oracle_date)\'');

        // 3) Campagne "legacy" pour rattacher tout ce qui existait avant les campagnes
        $this->addSql("INSERT INTO \"EREC_CAMPAIGN\" (id, title, is_deleted, created_at) VALUES (\"EREC_CAMPAIGN_id_seq\".NEXTVAL, 'Campagne historique (avant migration)', 0, SYSDATE)");

        // 4) Backfill : positions et candidatures existantes rattachées à la campagne legacy
        $this->addSql("UPDATE EREC_POSITION SET campaign_id = (SELECT id FROM \"EREC_CAMPAIGN\" WHERE title = 'Campagne historique (avant migration)') WHERE campaign_id IS NULL");
        $this->addSql("UPDATE EREC_JOB_APPLICATION SET campaign_id = (SELECT id FROM \"EREC_CAMPAIGN\" WHERE title = 'Campagne historique (avant migration)') WHERE campaign_id IS NULL");

        // closing_date arbitraire dans le futur : à ajuster si tu veux que ces anciennes offres soient déjà closes
        $this->addSql("UPDATE EREC_POSITION SET closing_date = TO_DATE('2099-12-31 00:00:00','YYYY-MM-DD HH24:MI:SS') WHERE closing_date IS NULL");

        // 5) Backfill : position_id de la candidature = ancienne reference_position_id de l'utilisateur
        $this->addSql('UPDATE EREC_JOB_APPLICATION ja SET position_id = (SELECT u.reference_position_id FROM EREC_USER u WHERE u.id = ja.user_id) WHERE ja.position_id IS NULL');

        // 6) Une fois les données propres, on verrouille les contraintes NOT NULL
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION MODIFY (campaign_id NUMBER(10) NOT NULL, position_id NUMBER(10) NOT NULL)');
        $this->addSql('ALTER TABLE EREC_POSITION MODIFY (campaign_id NUMBER(10) NOT NULL, closing_date DATE NOT NULL)');

        // 7) Contraintes FK + index (inchangé)
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD CONSTRAINT FK_4679E0CAF639F774 FOREIGN KEY (campaign_id) REFERENCES "EREC_CAMPAIGN" (id)');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD CONSTRAINT FK_4679E0CADD842E46 FOREIGN KEY (position_id) REFERENCES "EREC_POSITION" (id)');
        $this->addSql('CREATE INDEX IDX_4679E0CAA76ED395 ON EREC_JOB_APPLICATION (user_id)');
        $this->addSql('CREATE INDEX IDX_4679E0CAF639F774 ON EREC_JOB_APPLICATION (campaign_id)');
        $this->addSql('CREATE INDEX IDX_4679E0CADD842E46 ON EREC_JOB_APPLICATION (position_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_user_campaign ON EREC_JOB_APPLICATION (user_id, campaign_id)');
        $this->addSql('ALTER TABLE EREC_POSITION ADD CONSTRAINT FK_E5D280D0F639F774 FOREIGN KEY (campaign_id) REFERENCES "EREC_CAMPAIGN" (id)');
        $this->addSql('CREATE INDEX IDX_E5D280D0F639F774 ON EREC_POSITION (campaign_id)');
        $this->addSql('ALTER INDEX uniq_identifier_reference RENAME TO UNIQ_E5D280D0AEA34913');

    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP CONSTRAINT FK_4679E0CAF639F774');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP CONSTRAINT FK_4679E0CADD842E46');
        $this->addSql('ALTER TABLE "EREC_POSITION" DROP CONSTRAINT FK_E5D280D0F639F774');

        $this->addSql('DROP INDEX IDX_4679E0CAA76ED395');
        $this->addSql('DROP INDEX IDX_4679E0CAF639F774');
        $this->addSql('DROP INDEX IDX_4679E0CADD842E46');
        $this->addSql('DROP INDEX uniq_user_campaign');
        $this->addSql('DROP INDEX IDX_E5D280D0F639F774');
        $this->addSql('ALTER INDEX uniq_e5d280d0aea34913 RENAME TO uniq_identifier_reference');

        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (campaign_id, position_id)');
        $this->addSql('ALTER TABLE "EREC_POSITION" DROP (campaign_id, closing_date)');
        $this->addSql("CREATE UNIQUE INDEX uniq_4679e0caa76ed395 ON \"EREC_JOB_APPLICATION\" (USER_ID)");

        // Supprime la campagne legacy créée au up()
        $this->addSql("DELETE FROM \"EREC_CAMPAIGN\" WHERE title = 'Campagne historique (avant migration)'");

        $this->addSql('ALTER TABLE "EREC_USER_POSITION" DROP CONSTRAINT FK_54113136A76ED395');
        $this->addSql('ALTER TABLE "EREC_USER_POSITION" DROP CONSTRAINT FK_54113136DD842E46');
        $this->addSql('DROP SEQUENCE "EREC_CAMPAIGN_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_USER_POSITION_id_seq"');
        $this->addSql('DROP TABLE "EREC_CAMPAIGN"');
        $this->addSql('DROP TABLE "EREC_USER_POSITION"');

    }
}