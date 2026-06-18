<?php 

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260616130631 extends AbstractMigration
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
        $this->addSql('CREATE TABLE "EREC_CAMPAIGN" (id NUMBER(10) NOT NULL, title VARCHAR2(255) NOT NULL, description CLOB DEFAULT NULL NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, created_at TIMESTAMP(0) NOT NULL, updated_at TIMESTAMP(0) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN "EREC_CAMPAIGN".created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "EREC_CAMPAIGN".updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE EREC_ENGAGEMENT MODIFY (date_engagement DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (position NUMBER(10) NOT NULL, campaign NUMBER(10) NOT NULL)');
        $this->addSql('ALTER TABLE EREC_POSITION ADD (campaign_id NUMBER(10) NOT NULL, closing_date DATE NOT NULL)');
        $this->addSql('ALTER TABLE EREC_POSITION ADD CONSTRAINT FK_E5D280D0F639F774 FOREIGN KEY (campaign_id) REFERENCES "EREC_CAMPAIGN" (id)');
        $this->addSql('CREATE INDEX IDX_E5D280D0F639F774 ON EREC_POSITION (campaign_id)');
        $this->addSql('ALTER TABLE EREC_PROFILE MODIFY (cin_issue_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_USER MODIFY (birth_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_WORK_EXPERIENCE MODIFY (start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL)');
    }
    public function down(Schema $schema): void{
                $this->addSql('ALTER TABLE "EREC_POSITION" DROP CONSTRAINT FK_E5D280D0F639F774');
        $this->addSql('DROP SEQUENCE "EREC_CAMPAIGN_id_seq"');
        $this->addSql('DROP TABLE "EREC_CAMPAIGN"');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" MODIFY (START_DATE DATE DEFAULT NULL, END_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (position, campaign)');
        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" MODIFY (DATE_ENGAGEMENT DATE DEFAULT NULL)');
        $this->addSql('DROP INDEX IDX_E5D280D0F639F774');
        $this->addSql('ALTER TABLE "EREC_POSITION" DROP (campaign_id, closing_date)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" MODIFY (CIN_ISSUE_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_USER" MODIFY (BIRTH_DATE DATE DEFAULT NULL)');
    }

}