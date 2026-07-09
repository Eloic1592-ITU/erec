<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260703074618 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Suppression anciennes séquences, has_submitted_application par candidature avec backfill';
    }

    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);

        $this->addSql("ALTER session SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }

    public function up(Schema $schema): void
    {
        // Noms corrigés pour correspondre EXACTEMENT aux séquences créées dans les migrations 1 et 2

        $this->addSql('DROP SEQUENCE "EREC_CAMPAIGN_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_CERTIFICATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_CIVILITY_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_DEGREE_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_DOCUMENT_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_EDUCATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_ENGAGEMENT_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_FIELD_OF_STUDY_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_INTERNSHIP_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_JOB_APPLICATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_LOCATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_LEVEL_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_MARITAL_STATUS_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_OTHER_INFO_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_POSITION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_PROFILE_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_SKILL_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_USER_POSITION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_USER_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_WORK_EXPERIENCE_id_seq"');

        $this->addSql('ALTER TABLE EREC_ENGAGEMENT MODIFY (date_engagement NULL)');

        // DEFAULT 0 fourni => OK direct en NOT NULL même si la table a déjà des lignes
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (has_submitted_application NUMBER(1) DEFAULT 0 NOT NULL)');

        // Backfill : on reprend la valeur qui existait sur EREC_USER pour ne pas perdre
        // l'info des candidatures déjà soumises avant ce changement de modèle.
        // NVL(...,0) : un ancien has_submitted_application NULL est considéré comme "non soumis".
        $this->addSql('UPDATE EREC_JOB_APPLICATION ja SET has_submitted_application = 1 WHERE EXISTS (SELECT 1 FROM EREC_USER u WHERE u.id = ja.user_id AND NVL(u.has_submitted_application, 0) = 1)');

        $this->addSql('ALTER TABLE EREC_PROFILE MODIFY (cin_issue_date NULL)');
        $this->addSql('ALTER TABLE EREC_USER MODIFY (birth_date NULL)');
        $this->addSql('ALTER TABLE EREC_WORK_EXPERIENCE MODIFY (start_date NULL, end_date NULL)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('CREATE SEQUENCE "EREC_CAMPAIGN_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_CERTIFICATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_CIVILITY_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_DEGREE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_DOCUMENT_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_EDUCATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_ENGAGEMENT_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_FIELD_OF_STUDY_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_INTERNSHIP_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_JOB_APPLICATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_LOCATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_LEVEL_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_MARITAL_STATUS_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_OTHER_INFO_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_POSITION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_PROFILE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_SKILL_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_USER_POSITION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_USER_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_WORK_EXPERIENCE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');

        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" MODIFY (DATE_ENGAGEMENT DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_USER" MODIFY (BIRTH_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" MODIFY (CIN_ISSUE_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" MODIFY (START_DATE DATE DEFAULT NULL, END_DATE DATE DEFAULT NULL)');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (has_submitted_application)');
    }
}