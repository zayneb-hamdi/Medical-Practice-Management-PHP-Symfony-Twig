<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250430113234 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE TABLE "analyse" (id SERIAL NOT NULL, medecin_id INT DEFAULT NULL, patient_id INT DEFAULT NULL, type TEXT DEFAULT NULL, statut TEXT DEFAULT NULL, daterealisation TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_351B0C7E4F31A84 ON "analyse" (medecin_id)
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_351B0C7E6B899279 ON "analyse" (patient_id)
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".type IS '(DC2Type:simple_array)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".statut IS '(DC2Type:simple_array)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".daterealisation IS '(DC2Type:datetime_immutable)'
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE medecin (id SERIAL NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, specialite VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            CREATE TABLE patient (id SERIAL NOT NULL, nom VARCHAR(50) DEFAULT NULL, prenom VARCHAR(50) DEFAULT NULL, adresse TEXT DEFAULT NULL, telephone VARCHAR(50) DEFAULT NULL, PRIMARY KEY(id))
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ADD CONSTRAINT FK_351B0C7E4F31A84 FOREIGN KEY (medecin_id) REFERENCES medecin (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ADD CONSTRAINT FK_351B0C7E6B899279 FOREIGN KEY (patient_id) REFERENCES patient (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" DROP CONSTRAINT FK_351B0C7E4F31A84
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" DROP CONSTRAINT FK_351B0C7E6B899279
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE "analyse"
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE medecin
        SQL);
        $this->addSql(<<<'SQL'
            DROP TABLE patient
        SQL);
    }
}
