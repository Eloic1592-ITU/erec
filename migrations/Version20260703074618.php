<?php 

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260703074618 extends AbstractMigration
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
                $this->addSql('DROP SEQUENCE EREC_CAMPAIGN_SEQ');
        $this->addSql('DROP SEQUENCE EREC_CERT_SEQ');
        $this->addSql('DROP SEQUENCE EREC_CIV_SEQ');
        $this->addSql('DROP SEQUENCE EREC_DEG_SEQ');
        $this->addSql('DROP SEQUENCE EREC_DOC_SEQ');
        $this->addSql('DROP SEQUENCE EREC_EDU_SEQ');
        $this->addSql('DROP SEQUENCE EREC_ENG_SEQ');
        $this->addSql('DROP SEQUENCE EREC_FOS_SEQ');
        $this->addSql('DROP SEQUENCE EREC_INT_SEQ');
        $this->addSql('DROP SEQUENCE EREC_JOBAPP_SEQ');
        $this->addSql('DROP SEQUENCE EREC_LOC_SEQ');
        $this->addSql('DROP SEQUENCE EREC_LVL_SEQ');
        $this->addSql('DROP SEQUENCE EREC_MARSTAT_SEQ');
        $this->addSql('DROP SEQUENCE EREC_OTHINFO_SEQ');
        $this->addSql('DROP SEQUENCE EREC_POS_SEQ');
        $this->addSql('DROP SEQUENCE EREC_PROF_SEQ');
        $this->addSql('DROP SEQUENCE EREC_SKILL_SEQ');
        $this->addSql('DROP SEQUENCE EREC_USER_POSITION_SEQ');
        $this->addSql('DROP SEQUENCE EREC_USER_SEQ');
        $this->addSql('DROP SEQUENCE EREC_WORKEXP_SEQ');
        $this->addSql('ALTER TABLE EREC_ENGAGEMENT MODIFY (date_engagement DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (has_submitted_application NUMBER(1) DEFAULT 0 NOT NULL)');
        $this->addSql('ALTER TABLE EREC_PROFILE MODIFY (cin_issue_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_USER MODIFY (birth_date DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE EREC_WORK_EXPERIENCE MODIFY (start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL)');
    }
    public function down(Schema $schema): void{
                $this->addSql('CREATE SEQUENCE EREC_CAMPAIGN_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_CERT_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_CIV_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_DEG_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_DOC_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_EDU_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_ENG_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_FOS_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_INT_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_JOBAPP_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_LOC_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_LVL_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_MARSTAT_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_OTHINFO_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_POS_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_PROF_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_SKILL_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_USER_POSITION_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_USER_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE EREC_WORKEXP_SEQ START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" MODIFY (DATE_ENGAGEMENT DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_USER" MODIFY (BIRTH_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" MODIFY (CIN_ISSUE_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" MODIFY (START_DATE DATE DEFAULT NULL, END_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (has_submitted_application)');
    }

}