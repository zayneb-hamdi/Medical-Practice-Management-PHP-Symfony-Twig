<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250430121713 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ALTER type TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ALTER statut TYPE VARCHAR(255)
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".type IS NULL
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".statut IS NULL
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ALTER type TYPE TEXT
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE "analyse" ALTER statut TYPE TEXT
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".type IS '(DC2Type:simple_array)'
        SQL);
        $this->addSql(<<<'SQL'
            COMMENT ON COLUMN "analyse".statut IS '(DC2Type:simple_array)'
        SQL);
    }
}
