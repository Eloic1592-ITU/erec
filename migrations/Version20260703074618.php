<?php

declare(strict_type=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20260703074618 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Ajout de has_submitted_application sur EREC_JOB_APPLICATION avec backfill depuis EREC_USER';
    }
 
    public function preUp(Schema $schema): void
    {
        parent::preUp($schema);
 
        $this->addSql("ALTER session SET NLS_DATE_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_FORMAT = 'YYYY-MM-DD HH24:MI:SS' NLS_TIMESTAMP_TZ_FORMAT = 'YYYY-MM-DD HH24:MI:SS TZH:TZM'");
    }
 
    public function up(Schema $schema): void
    {
        // DEFAULT 0 fourni => ajout direct en NOT NULL possible même si la table a déjà des lignes
        $this->addSql('ALTER TABLE EREC_JOB_APPLICATION ADD (has_submitted_application NUMBER(1) DEFAULT 0 NOT NULL)');
 
        // Backfill : on reprend la valeur qui existait sur EREC_USER pour ne pas perdre
        // l'info des candidatures déjà soumises avant ce changement de modèle.
        //Un ancien has_submitted_application NULL est considéré comme "non soumis".
        $this->addSql('UPDATE EREC_JOB_APPLICATION ja SET has_submitted_application = 1 WHERE EXISTS (SELECT 1 FROM EREC_USER u WHERE u.id = ja.user_id AND NVL(u.has_submitted_application, 0) = 1)');
    }
 
    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE "EREC_JOB_APPLICATION" DROP (has_submitted_application)');
    }
}