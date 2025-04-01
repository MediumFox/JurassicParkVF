<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250331124127 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE payer_billet DROP CONSTRAINT fk_4744803cf61ee8b');
        $this->addSql('DROP INDEX idx_4744803cf61ee8b');
        $this->addSql('ALTER TABLE payer_billet DROP remboursement_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE payer_billet ADD remboursement_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE payer_billet ADD CONSTRAINT fk_4744803cf61ee8b FOREIGN KEY (remboursement_id) REFERENCES remboursement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_4744803cf61ee8b ON payer_billet (remboursement_id)');
    }
}
