<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250329201723 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre ADD format_chambre_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF589AE8D9 FOREIGN KEY (format_chambre_id) REFERENCES format_chambre (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C509E4FF589AE8D9 ON chambre (format_chambre_id)
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement ADD billet_id INT NOT NULL
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EF44973C78 FOREIGN KEY (billet_id) REFERENCES payer_billet (id) NOT DEFERRABLE INITIALLY IMMEDIATE
        SQL);
        $this->addSql(<<<'SQL'
            CREATE INDEX IDX_C0C0D9EF44973C78 ON remboursement (billet_id)
        SQL);
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(<<<'SQL'
            CREATE SCHEMA public
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement DROP CONSTRAINT FK_C0C0D9EF44973C78
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_C0C0D9EF44973C78
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE remboursement DROP billet_id
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre DROP CONSTRAINT FK_C509E4FF589AE8D9
        SQL);
        $this->addSql(<<<'SQL'
            DROP INDEX IDX_C509E4FF589AE8D9
        SQL);
        $this->addSql(<<<'SQL'
            ALTER TABLE chambre DROP format_chambre_id
        SQL);
    }
}
