<?php 

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20250603123929 extends AbstractMigration
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
                $this->addSql('CREATE SEQUENCE "EREC_CERTIFICATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_CIVILITY_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_DEGREE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_DOCUMENT_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_EDUCATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_ENGAGEMENT_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_FIELD_OF_STUDY_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_INTERNSHIP_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_JOB_APPLICATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_LEVEL_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_LOCATION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_MARITAL_STATUS_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_OTHER_INFO_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_POSITION_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_PROFILE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_SKILL_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_USER_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE SEQUENCE "EREC_WORK_EXPERIENCE_id_seq" START WITH 1 MINVALUE 1 INCREMENT BY 1');
        $this->addSql('CREATE TABLE "EREC_CERTIFICATION" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, certification VARCHAR2(255) NOT NULL, specialty VARCHAR2(255) NOT NULL, institution VARCHAR2(255) NOT NULL, certification_year NUMBER(10) NOT NULL, certification_filename VARCHAR2(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1C7DDE15A76ED395 ON "EREC_CERTIFICATION" (user_id)');
        $this->addSql('CREATE TABLE "EREC_CIVILITY" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_DEGREE" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_DOCUMENT" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, cv_filename VARCHAR2(255) NOT NULL, lm_filename VARCHAR2(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_7B97EE53A76ED395 ON "EREC_DOCUMENT" (user_id)');
        $this->addSql('CREATE TABLE "EREC_EDUCATION" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, degree_id NUMBER(10) NOT NULL, field_of_study_id NUMBER(10) NOT NULL, other_field_of_study VARCHAR2(255) DEFAULT NULL NULL, specialty VARCHAR2(255) NOT NULL, institution VARCHAR2(255) NOT NULL, graduation_year NUMBER(10) NOT NULL, degree_filename VARCHAR2(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_ABC35439A76ED395 ON "EREC_EDUCATION" (user_id)');
        $this->addSql('CREATE INDEX IDX_ABC35439B35C5756 ON "EREC_EDUCATION" (degree_id)');
        $this->addSql('CREATE INDEX IDX_ABC354399E9C46D5 ON "EREC_EDUCATION" (field_of_study_id)');
        $this->addSql('CREATE TABLE "EREC_ENGAGEMENT" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, city VARCHAR2(255) NOT NULL, date_engagement DATE NOT NULL, second_position VARCHAR2(255) DEFAULT NULL NULL, third_position VARCHAR2(255) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_D4A9D373A76ED395 ON "EREC_ENGAGEMENT" (user_id)');
        $this->addSql('CREATE TABLE "EREC_FIELD_OF_STUDY" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_INTERNSHIP" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, theme VARCHAR2(255) NOT NULL, organization VARCHAR2(255) NOT NULL, internship_year NUMBER(10) NOT NULL, duration NUMBER(10) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1C17623EA76ED395 ON "EREC_INTERNSHIP" (user_id)');
        $this->addSql('CREATE TABLE "EREC_JOB_APPLICATION" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, primary_location VARCHAR2(255) NOT NULL, secondary_location VARCHAR2(255) DEFAULT NULL NULL, tertiary_location VARCHAR2(255) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_4679E0CAA76ED395 ON "EREC_JOB_APPLICATION" (user_id)');
        $this->addSql('CREATE TABLE "EREC_LEVEL" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_LOCATION" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_MARITAL_STATUS" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_OTHER_INFO" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, malagasy_reading_level VARCHAR2(255) NOT NULL, malagasy_writing_level VARCHAR2(255) NOT NULL, malagasy_speaking_level VARCHAR2(255) NOT NULL, french_reading_level VARCHAR2(255) NOT NULL, french_writing_level VARCHAR2(255) NOT NULL, french_speaking_level VARCHAR2(255) NOT NULL, english_reading_level VARCHAR2(255) NOT NULL, english_writing_level VARCHAR2(255) NOT NULL, english_speaking_level VARCHAR2(255) NOT NULL, other_language_name VARCHAR2(255) DEFAULT NULL NULL, other_language_reading_level VARCHAR2(255) DEFAULT NULL NULL, other_language_writing_level VARCHAR2(255) DEFAULT NULL NULL, other_language_speaking_level VARCHAR2(255) DEFAULT NULL NULL, microsoft_word_level VARCHAR2(255) NOT NULL, microsoft_excel_level VARCHAR2(255) NOT NULL, microsoft_power_point_level VARCHAR2(255) NOT NULL, microsoft_one_note_level VARCHAR2(255) NOT NULL, microsoft_outlook_level VARCHAR2(255) NOT NULL, microsoft_publisher_level VARCHAR2(255) NOT NULL, microsoft_access_level VARCHAR2(255) NOT NULL, microsoft_visio_level VARCHAR2(255) NOT NULL, microsoft_project_level VARCHAR2(255) NOT NULL, other_skills CLOB DEFAULT NULL NULL, other_not_info_skills VARCHAR2(255) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6FCA9AB3A76ED395 ON "EREC_OTHER_INFO" (user_id)');
        $this->addSql('COMMENT ON COLUMN "EREC_OTHER_INFO".other_skills IS \'(DC2Type:array)\'');
        $this->addSql('CREATE TABLE "EREC_POSITION" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, reference VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_REFERENCE ON "EREC_POSITION" (reference)');
        $this->addSql('CREATE TABLE "EREC_PROFILE" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, civility_id NUMBER(10) NOT NULL, marital_status_id NUMBER(10) NOT NULL, birth_country VARCHAR2(255) NOT NULL, birth_city VARCHAR2(255) NOT NULL, cin_issue_date DATE NOT NULL, cin_issue_place VARCHAR2(255) NOT NULL, address VARCHAR2(255) NOT NULL, postal_code VARCHAR2(255) NOT NULL, city VARCHAR2(255) NOT NULL, country VARCHAR2(255) NOT NULL, nationality VARCHAR2(255) NOT NULL, number_of_children NUMBER(10) NOT NULL, phone1 VARCHAR2(255) NOT NULL, phone2 VARCHAR2(255) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_C333FB4DA76ED395 ON "EREC_PROFILE" (user_id)');
        $this->addSql('CREATE INDEX IDX_C333FB4D23D6A298 ON "EREC_PROFILE" (civility_id)');
        $this->addSql('CREATE INDEX IDX_C333FB4DE559F9BF ON "EREC_PROFILE" (marital_status_id)');
        $this->addSql('CREATE TABLE "EREC_SKILL" (id NUMBER(10) NOT NULL, name VARCHAR2(255) NOT NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE "EREC_USER" (id NUMBER(10) NOT NULL, reference_position_id NUMBER(10) NOT NULL, email VARCHAR2(180) NOT NULL, roles CLOB NOT NULL, password VARCHAR2(255) NOT NULL, first_name VARCHAR2(255) NOT NULL, last_name VARCHAR2(255) NOT NULL, birth_date DATE NOT NULL, cin VARCHAR2(255) NOT NULL, reset_token VARCHAR2(255) DEFAULT NULL NULL, has_submitted_application NUMBER(1) DEFAULT NULL NULL, is_deleted NUMBER(1) DEFAULT NULL NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DAF138BA3BB36C72 ON "EREC_USER" (reference_position_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON "EREC_USER" (email)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_CIN ON "EREC_USER" (cin)');
        $this->addSql('COMMENT ON COLUMN "EREC_USER".roles IS \'(DC2Type:json)\'');
        $this->addSql('CREATE TABLE "EREC_WORK_EXPERIENCE" (id NUMBER(10) NOT NULL, user_id NUMBER(10) NOT NULL, position VARCHAR2(255) NOT NULL, organization VARCHAR2(255) NOT NULL, location VARCHAR2(255) NOT NULL, start_date DATE NOT NULL, end_date DATE NOT NULL, reference_name VARCHAR2(255) NOT NULL, reference_position VARCHAR2(255) NOT NULL, reference_email VARCHAR2(180) NOT NULL, reference_phone VARCHAR2(255) NOT NULL, work_filename VARCHAR2(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1101EBDA76ED395 ON "EREC_WORK_EXPERIENCE" (user_id)');
        $this->addSql('ALTER TABLE "EREC_CERTIFICATION" ADD CONSTRAINT FK_1C7DDE15A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_DOCUMENT" ADD CONSTRAINT FK_7B97EE53A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" ADD CONSTRAINT FK_ABC35439A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" ADD CONSTRAINT FK_ABC35439B35C5756 FOREIGN KEY (degree_id) REFERENCES "EREC_DEGREE" (id)');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" ADD CONSTRAINT FK_ABC354399E9C46D5 FOREIGN KEY (field_of_study_id) REFERENCES "EREC_FIELD_OF_STUDY" (id)');
        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" ADD CONSTRAINT FK_D4A9D373A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_INTERNSHIP" ADD CONSTRAINT FK_1C17623EA76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" ADD CONSTRAINT FK_4679E0CAA76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_OTHER_INFO" ADD CONSTRAINT FK_6FCA9AB3A76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" ADD CONSTRAINT FK_C333FB4DA76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" ADD CONSTRAINT FK_C333FB4D23D6A298 FOREIGN KEY (civility_id) REFERENCES "EREC_CIVILITY" (id)');
        $this->addSql('ALTER TABLE "EREC_PROFILE" ADD CONSTRAINT FK_C333FB4DE559F9BF FOREIGN KEY (marital_status_id) REFERENCES "EREC_MARITAL_STATUS" (id)');
        $this->addSql('ALTER TABLE "EREC_USER" ADD CONSTRAINT FK_DAF138BA3BB36C72 FOREIGN KEY (reference_position_id) REFERENCES "EREC_POSITION" (id)');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" ADD CONSTRAINT FK_1101EBDA76ED395 FOREIGN KEY (user_id) REFERENCES "EREC_USER" (id)');
    }
    public function down(Schema $schema): void{
                $this->addSql('DROP SEQUENCE "EREC_CERTIFICATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_CIVILITY_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_DEGREE_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_DOCUMENT_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_EDUCATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_ENGAGEMENT_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_FIELD_OF_STUDY_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_INTERNSHIP_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_JOB_APPLICATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_LEVEL_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_LOCATION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_MARITAL_STATUS_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_OTHER_INFO_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_POSITION_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_PROFILE_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_SKILL_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_USER_id_seq"');
        $this->addSql('DROP SEQUENCE "EREC_WORK_EXPERIENCE_id_seq"');
        $this->addSql('ALTER TABLE "EREC_CERTIFICATION" DROP CONSTRAINT FK_1C7DDE15A76ED395');
        $this->addSql('ALTER TABLE "EREC_DOCUMENT" DROP CONSTRAINT FK_7B97EE53A76ED395');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" DROP CONSTRAINT FK_ABC35439A76ED395');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" DROP CONSTRAINT FK_ABC35439B35C5756');
        $this->addSql('ALTER TABLE "EREC_EDUCATION" DROP CONSTRAINT FK_ABC354399E9C46D5');
        $this->addSql('ALTER TABLE "EREC_ENGAGEMENT" DROP CONSTRAINT FK_D4A9D373A76ED395');
        $this->addSql('ALTER TABLE "EREC_INTERNSHIP" DROP CONSTRAINT FK_1C17623EA76ED395');
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP CONSTRAINT FK_4679E0CAA76ED395');
        $this->addSql('ALTER TABLE "EREC_OTHER_INFO" DROP CONSTRAINT FK_6FCA9AB3A76ED395');
        $this->addSql('ALTER TABLE "EREC_PROFILE" DROP CONSTRAINT FK_C333FB4DA76ED395');
        $this->addSql('ALTER TABLE "EREC_PROFILE" DROP CONSTRAINT FK_C333FB4D23D6A298');
        $this->addSql('ALTER TABLE "EREC_PROFILE" DROP CONSTRAINT FK_C333FB4DE559F9BF');
        $this->addSql('ALTER TABLE "EREC_USER" DROP CONSTRAINT FK_DAF138BA3BB36C72');
        $this->addSql('ALTER TABLE "EREC_WORK_EXPERIENCE" DROP CONSTRAINT FK_1101EBDA76ED395');
        $this->addSql('DROP TABLE "EREC_CERTIFICATION"');
        $this->addSql('DROP TABLE "EREC_CIVILITY"');
        $this->addSql('DROP TABLE "EREC_DEGREE"');
        $this->addSql('DROP TABLE "EREC_DOCUMENT"');
        $this->addSql('DROP TABLE "EREC_EDUCATION"');
        $this->addSql('DROP TABLE "EREC_ENGAGEMENT"');
        $this->addSql('DROP TABLE "EREC_FIELD_OF_STUDY"');
        $this->addSql('DROP TABLE "EREC_INTERNSHIP"');
        $this->addSql('DROP TABLE "EREC_JOB_APPLICATION"');
        $this->addSql('DROP TABLE "EREC_LEVEL"');
        $this->addSql('DROP TABLE "EREC_LOCATION"');
        $this->addSql('DROP TABLE "EREC_MARITAL_STATUS"');
        $this->addSql('DROP TABLE "EREC_OTHER_INFO"');
        $this->addSql('DROP TABLE "EREC_POSITION"');
        $this->addSql('DROP TABLE "EREC_PROFILE"');
        $this->addSql('DROP TABLE "EREC_SKILL"');
        $this->addSql('DROP TABLE "EREC_USER"');
        $this->addSql('DROP TABLE "EREC_WORK_EXPERIENCE"');
    }

}