<?php 

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260715124015 extends AbstractMigration
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

    public function up(Schema $schema): void
    {
        // Un seul nom de séquence partout
        $this->addSql('CREATE SEQUENCE "EREC_CONTRACT_TYPE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');

        $this->addSql('
            CREATE TABLE "EREC_CONTRACT_TYPE" (
                id NUMBER(10) NOT NULL,
                code VARCHAR2(30) NOT NULL,
                label VARCHAR2(100) NOT NULL,
                description VARCHAR2(255) DEFAULT NULL,
                certification_required NUMBER(1) NOT NULL,
                internship_required NUMBER(1) NOT NULL,
                is_deleted NUMBER(1) DEFAULT NULL,
                PRIMARY KEY(id)
            )
        ');

        $this->addSql('CREATE UNIQUE INDEX UNIQ_CONTRACT_TYPE_CODE ON "EREC_CONTRACT_TYPE" (code)');

        // Même nom de séquence dans les INSERT
        $this->addSql("
            INSERT INTO \"EREC_CONTRACT_TYPE\"
            (id, code, label, description, certification_required, internship_required, is_deleted)
            VALUES
            (\"EREC_CONTRACT_TYPE_id_seq\".NEXTVAL, 'CDI', 'Contrat à Durée Indéterminée', 'Contrat permanent sans durée définie', 1, 0, 0)
        ");

        $this->addSql("
            INSERT INTO \"EREC_CONTRACT_TYPE\"
            (id, code, label, description, certification_required, internship_required, is_deleted)
            VALUES
            (\"EREC_CONTRACT_TYPE_id_seq\".NEXTVAL, 'CDD', 'Contrat à Durée Déterminée', 'Contrat avec une durée définie', 1, 0, 0)
        ");

        $this->addSql("
            INSERT INTO \"EREC_CONTRACT_TYPE\"
            (id, code, label, description, certification_required, internship_required, is_deleted)
            VALUES
            (\"EREC_CONTRACT_TYPE_id_seq\".NEXTVAL, 'ALTERNANCE', 'Alternance', 'Formation combinant études et expérience professionnelle', 1, 1, 0)
        ");

        $this->addSql('ALTER TABLE EREC_CAMPAIGN ADD (contract_type_id NUMBER(10) NULL)');

        $this->addSql("
            UPDATE EREC_CAMPAIGN
            SET contract_type_id = (
                SELECT id FROM \"EREC_CONTRACT_TYPE\" WHERE code = 'CDI'
            )
        ");

        $this->addSql('ALTER TABLE EREC_CAMPAIGN MODIFY (contract_type_id NUMBER(10) NOT NULL)');

        $this->addSql('
            ALTER TABLE EREC_CAMPAIGN 
            ADD CONSTRAINT FK_CAMPAIGN_CONTRACT_TYPE 
            FOREIGN KEY (contract_type_id) 
            REFERENCES "EREC_CONTRACT_TYPE"(id)
        ');

        $this->addSql('CREATE INDEX IDX_CAMPAIGN_CONTRACT_TYPE ON EREC_CAMPAIGN(contract_type_id)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE EREC_CAMPAIGN DROP CONSTRAINT FK_CAMPAIGN_CONTRACT_TYPE');
        $this->addSql('DROP INDEX IDX_CAMPAIGN_CONTRACT_TYPE');
        $this->addSql('ALTER TABLE EREC_CAMPAIGN DROP COLUMN contract_type_id');
        $this->addSql('DROP TABLE "EREC_CONTRACT_TYPE"');
        $this->addSql('DROP SEQUENCE "EREC_CONTRACT_TYPE_id_seq"'); 
    }

}