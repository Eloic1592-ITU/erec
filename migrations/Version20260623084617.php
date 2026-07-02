<?php 

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260623084617 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);

        $this->addSql("ALTER session SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }

    public function up(Schema $schema): void{
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
        $this->addSql('ALTER TABLE EREC_ENGAGEMENT MODIFY (date_engagement DATE DEFAULT NULL)');
        $this->addSql('DROP INDEX uniq_4679e0caa76ed395');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (campaign_id NUMBER(10) NOT NULL, position_id NUMBER(10) NOT NULL)');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD CONSTRAINT FK_4679E0CAF639F774 FOREIGN KEY (campaign_id) REFERENCES "EREC_CAMPAIGN" (id)');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD CONSTRAINT FK_4679E0CADD842E46 FOREIGN KEY (position_id) REFERENCES "EREC_POSITION" (id)');
        $this->addSql('CREATE INDEX IDX_4679E0CAA76ED395 ON EREC_JOB_APPLICATION (user_id)');
        $this->addSql('CREATE INDEX IDX_4679E0CAF639F774 ON EREC_JOB_APPLICATION (campaign_id)');
        $this->addSql('CREATE INDEX IDX_4679E0CADD842E46 ON EREC_JOB_APPLICATION (position_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_user_campaign ON EREC_JOB_APPLICATION (user_id, campaign_id)');
        $this->addSql('ALTER TABLE EREC_POSITION ADD (campaign_id NUMBER(10) NOT NULL, closing_date DATE NOT NULL)');
        $this->addSql('COMMENT ON COLUMN EREC_POSITION.closing_date IS \'(DC2Type:oracle_date)\'');
        $this->addSql('ALTER TABLE EREC_POSITION ADD CONSTRAINT FK_E5D280D0F639F774 FOREIGN KEY (campaign_id) REFERENCES "EREC_CAMPAIGN" (id)');
        $this->addSql('CREATE INDEX IDX_E5D280D0F639F774 ON EREC_POSITION (campaign_id)');
        $this->addSql('ALTER INDEX uniq_identifier_reference RENAME TO UNIQ_E5D280D0AEA34913');
        $this->addSql('ALTER TABLE EREC_PROFILE MODIFY (cin_issue_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_USER MODIFY (birth_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_WORK_EXPERIENCE MODIFY (start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL)');
    }
    public function down(Schema $schema): void{
                $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP CONSTRAINT FK_4679E0CAF639F774');
        $this->addSql('ALTER TABLE "EREC_POSITION" DROP CONSTRAINT FK_E5D280D0F639F774');
        $this->addSql('DROP SEQUENCE "EREC_CAMPAIGN_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_USER_POSITION_id_seq"');
        $this->addSql('ALTER TABLE "EREC_USER_POSITION" DROP CONSTRAINT FK_54113136A76ED395');
        $this->addSql('ALTER TABLE "EREC_USER_POSITION" DROP CONSTRAINT FK_54113136DD842E46');
        $this->addSql('DROP TABLE "EREC_CAMPAIGN"');
        $this->addSql('DROP TABLE "EREC_USER_POSITION"');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" MODIFY (START_DATE DATE DEFAULT NULL, END_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP CONSTRAINT FK_4679E0CADD842E46');
        $this->addSql('DROP INDEX IDX_4679E0CAA76ED395');
        $this->addSql('DROP INDEX IDX_4679E0CAF639F774');
        $this->addSql('DROP INDEX IDX_4679E0CADD842E46');
        $this->addSql('DROP INDEX uniq_user_campaign');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (campaign_id, position_id)');
        $this->addSql('CREATE UNIQUE INDEX uniq_4679e0caa76ed395 ON "EREC_JOB_APPLICATION" (USER_ID)');
        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" MODIFY (DATE_ENGAGEMENT DATE DEFAULT NULL)');
        $this->addSql('DROP INDEX IDX_E5D280D0F639F774');
        $this->addSql('ALTER TABLE "EREC_POSITION" DROP (campaign_id, closing_date)');
        $this->addSql('ALTER INDEX uniq_e5d280d0aea34913 RENAME TO uniq_identifier_reference');
        $this->addSql('ALTER TABLE "EREC_PROFILE" MODIFY (CIN_ISSUE_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_USER" MODIFY (BIRTH_DATE DATE DEFAULT NULL)');
    }

}