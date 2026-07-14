<?php 

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260714062707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout colonne cover_letter_filename dans EREC_EDUCATION';
    }

    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);
        $this->addSql("ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE EREC_EDUCATION ADD (cover_letter_filename VARCHAR2(255) DEFAULT NULL)");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("ALTER TABLE EREC_EDUCATION DROP (cover_letter_filename)");
    }

}