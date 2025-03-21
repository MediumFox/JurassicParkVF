<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250317204154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE louer_hotel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE payer_billet_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE remboursement_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE remboursement_hotel_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE acheter_produit (client_id INT NOT NULL, produit_id INT NOT NULL, date_id INT NOT NULL, qte INT NOT NULL, PRIMARY KEY(client_id, produit_id, date_id))');
        $this->addSql('CREATE INDEX IDX_A704F21019EB6921 ON acheter_produit (client_id)');
        $this->addSql('CREATE INDEX IDX_A704F210F347EFB ON acheter_produit (produit_id)');
        $this->addSql('CREATE INDEX IDX_A704F210B897366B ON acheter_produit (date_id)');
        $this->addSql('CREATE TABLE biome (id INT NOT NULL, libelle_biome VARCHAR(255) NOT NULL, description_biome VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE chambre (id INT NOT NULL, hotel_id INT NOT NULL, numero_chambre VARCHAR(255) NOT NULL, etage_chambre VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C509E4FF3243BB18 ON chambre (hotel_id)');
        $this->addSql('CREATE TABLE date (id INT NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE dinosaure (id INT NOT NULL, enclos_id INT NOT NULL, image_dinosaure VARCHAR(255) NOT NULL, libelle_dinosaure VARCHAR(255) NOT NULL, regime_dinosaure VARCHAR(255) NOT NULL, ere_dinosaure VARCHAR(255) NOT NULL, description_dinosaure VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_450ADBC0B1C0859 ON dinosaure (enclos_id)');
        $this->addSql('CREATE TABLE enclos (id INT NOT NULL, id_biome_id INT NOT NULL, biome_id INT NOT NULL, libelle_enclos VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_8CCECB21B4E1886C ON enclos (id_biome_id)');
        $this->addSql('CREATE INDEX IDX_8CCECB21E43A64F9 ON enclos (biome_id)');
        $this->addSql('CREATE TABLE format_billet (id INT NOT NULL, libelle_billet VARCHAR(255) NOT NULL, image_billet VARCHAR(255) NOT NULL, description_billet VARCHAR(1000) NOT NULL, prix_billet INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE format_chambre (id INT NOT NULL, libelle_format_chambre VARCHAR(255) NOT NULL, prix_format_chambre INT NOT NULL, description_format_billet VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE horaire (id INT NOT NULL, ouverture TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fermeture TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE hotel (id INT NOT NULL, biome_id INT DEFAULT NULL, libelle_hotel VARCHAR(255) NOT NULL, image_hotel VARCHAR(255) NOT NULL, description_hotel VARCHAR(1000) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3535ED9E43A64F9 ON hotel (biome_id)');
        $this->addSql('CREATE TABLE jour (id INT NOT NULL, libelle_jour VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE louer_hotel (id INT NOT NULL, user_id INT NOT NULL, chambre_id INT NOT NULL, date_id INT NOT NULL, debut_location TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fin_location TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_70C4104FA76ED395 ON louer_hotel (user_id)');
        $this->addSql('CREATE INDEX IDX_70C4104F9B177F54 ON louer_hotel (chambre_id)');
        $this->addSql('CREATE INDEX IDX_70C4104FB897366B ON louer_hotel (date_id)');
        $this->addSql('CREATE TABLE ouverture_restaurant (restaurant_id INT NOT NULL, jour_id INT NOT NULL, horaire_id INT NOT NULL, PRIMARY KEY(restaurant_id, jour_id, horaire_id))');
        $this->addSql('CREATE INDEX IDX_697FD193B1E7706E ON ouverture_restaurant (restaurant_id)');
        $this->addSql('CREATE INDEX IDX_697FD193220C6AD0 ON ouverture_restaurant (jour_id)');
        $this->addSql('CREATE INDEX IDX_697FD19358C54515 ON ouverture_restaurant (horaire_id)');
        $this->addSql('CREATE TABLE payer_billet (id INT NOT NULL, user_id INT NOT NULL, billet_id INT NOT NULL, date_id INT NOT NULL, debut_billet TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, fin_billet TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_4744803CA76ED395 ON payer_billet (user_id)');
        $this->addSql('CREATE INDEX IDX_4744803C44973C78 ON payer_billet (billet_id)');
        $this->addSql('CREATE INDEX IDX_4744803CB897366B ON payer_billet (date_id)');
        $this->addSql('CREATE TABLE produit (id INT NOT NULL, libelle_produit VARCHAR(255) NOT NULL, image_produit VARCHAR(255) NOT NULL, description_produit VARCHAR(1000) NOT NULL, stock INT NOT NULL, disponible_achat BOOLEAN NOT NULL, prix_produit DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE remboursement (id INT NOT NULL, client_id INT NOT NULL, date_demande TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, statut VARCHAR(255) NOT NULL, motif VARCHAR(1500) NOT NULL, montant DOUBLE PRECISION NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C0C0D9EF19EB6921 ON remboursement (client_id)');
        $this->addSql('CREATE TABLE remboursement_billet (remboursement_id INT NOT NULL, payer_billet_id INT NOT NULL, PRIMARY KEY(remboursement_id, payer_billet_id))');
        $this->addSql('CREATE INDEX IDX_B9B130B1F61EE8B ON remboursement_billet (remboursement_id)');
        $this->addSql('CREATE INDEX IDX_B9B130B1102C441 ON remboursement_billet (payer_billet_id)');
        $this->addSql('CREATE TABLE remboursement_hotel (id INT NOT NULL, remboursement_id INT NOT NULL, louer_hotel_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D7E7E7CF61EE8B ON remboursement_hotel (remboursement_id)');
        $this->addSql('CREATE INDEX IDX_D7E7E7CCB4C1B45 ON remboursement_hotel (louer_hotel_id)');
        $this->addSql('CREATE TABLE reserver_restaurant (client_id INT NOT NULL, restaurant_id INT NOT NULL, date_id INT NOT NULL, date_reservation TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, present BOOLEAN NOT NULL, nb_personne INT NOT NULL, PRIMARY KEY(client_id, restaurant_id, date_id))');
        $this->addSql('CREATE INDEX IDX_25F6B43A19EB6921 ON reserver_restaurant (client_id)');
        $this->addSql('CREATE INDEX IDX_25F6B43AB1E7706E ON reserver_restaurant (restaurant_id)');
        $this->addSql('CREATE INDEX IDX_25F6B43AB897366B ON reserver_restaurant (date_id)');
        $this->addSql('CREATE TABLE restaurant (id INT NOT NULL, biome_id INT NOT NULL, libelle_restaurant VARCHAR(255) NOT NULL, image_restaurant VARCHAR(255) NOT NULL, nb_table INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_EB95123FE43A64F9 ON restaurant (biome_id)');
        $this->addSql('CREATE TABLE "user" (id INT NOT NULL, email VARCHAR(255) NOT NULL, pwd VARCHAR(255) NOT NULL, numero_telephone VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, roles JSON NOT NULL, is_verified BOOLEAN NOT NULL, type VARCHAR(255) NOT NULL, adresse_postal VARCHAR(255) DEFAULT NULL, code_postal INT DEFAULT NULL, admin_level INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649E7927C74 ON "user" (email)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGSERIAL NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('COMMENT ON COLUMN messenger_messages.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.available_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN messenger_messages.delivered_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE OR REPLACE FUNCTION notify_messenger_messages() RETURNS TRIGGER AS $$
            BEGIN
                PERFORM pg_notify(\'messenger_messages\', NEW.queue_name::text);
                RETURN NEW;
            END;
        $$ LANGUAGE plpgsql;');
        $this->addSql('DROP TRIGGER IF EXISTS notify_trigger ON messenger_messages;');
        $this->addSql('CREATE TRIGGER notify_trigger AFTER INSERT OR UPDATE ON messenger_messages FOR EACH ROW EXECUTE PROCEDURE notify_messenger_messages();');
        $this->addSql('ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F21019EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F210F347EFB FOREIGN KEY (produit_id) REFERENCES produit (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE acheter_produit ADD CONSTRAINT FK_A704F210B897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE chambre ADD CONSTRAINT FK_C509E4FF3243BB18 FOREIGN KEY (hotel_id) REFERENCES hotel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dinosaure ADD CONSTRAINT FK_450ADBC0B1C0859 FOREIGN KEY (enclos_id) REFERENCES enclos (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE enclos ADD CONSTRAINT FK_8CCECB21B4E1886C FOREIGN KEY (id_biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE enclos ADD CONSTRAINT FK_8CCECB21E43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE hotel ADD CONSTRAINT FK_3535ED9E43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104FA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104F9B177F54 FOREIGN KEY (chambre_id) REFERENCES chambre (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE louer_hotel ADD CONSTRAINT FK_70C4104FB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD193B1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD193220C6AD0 FOREIGN KEY (jour_id) REFERENCES jour (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE ouverture_restaurant ADD CONSTRAINT FK_697FD19358C54515 FOREIGN KEY (horaire_id) REFERENCES horaire (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803CA76ED395 FOREIGN KEY (user_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803C44973C78 FOREIGN KEY (billet_id) REFERENCES format_billet (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE payer_billet ADD CONSTRAINT FK_4744803CB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE remboursement ADD CONSTRAINT FK_C0C0D9EF19EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE remboursement_billet ADD CONSTRAINT FK_B9B130B1F61EE8B FOREIGN KEY (remboursement_id) REFERENCES remboursement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE remboursement_billet ADD CONSTRAINT FK_B9B130B1102C441 FOREIGN KEY (payer_billet_id) REFERENCES payer_billet (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE remboursement_hotel ADD CONSTRAINT FK_D7E7E7CF61EE8B FOREIGN KEY (remboursement_id) REFERENCES remboursement (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE remboursement_hotel ADD CONSTRAINT FK_D7E7E7CCB4C1B45 FOREIGN KEY (louer_hotel_id) REFERENCES louer_hotel (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43A19EB6921 FOREIGN KEY (client_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43AB1E7706E FOREIGN KEY (restaurant_id) REFERENCES restaurant (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE reserver_restaurant ADD CONSTRAINT FK_25F6B43AB897366B FOREIGN KEY (date_id) REFERENCES date (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE restaurant ADD CONSTRAINT FK_EB95123FE43A64F9 FOREIGN KEY (biome_id) REFERENCES biome (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE louer_hotel_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE payer_billet_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE remboursement_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE remboursement_hotel_id_seq CASCADE');
        $this->addSql('ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F21019EB6921');
        $this->addSql('ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F210F347EFB');
        $this->addSql('ALTER TABLE acheter_produit DROP CONSTRAINT FK_A704F210B897366B');
        $this->addSql('ALTER TABLE chambre DROP CONSTRAINT FK_C509E4FF3243BB18');
        $this->addSql('ALTER TABLE dinosaure DROP CONSTRAINT FK_450ADBC0B1C0859');
        $this->addSql('ALTER TABLE enclos DROP CONSTRAINT FK_8CCECB21B4E1886C');
        $this->addSql('ALTER TABLE enclos DROP CONSTRAINT FK_8CCECB21E43A64F9');
        $this->addSql('ALTER TABLE hotel DROP CONSTRAINT FK_3535ED9E43A64F9');
        $this->addSql('ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104FA76ED395');
        $this->addSql('ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104F9B177F54');
        $this->addSql('ALTER TABLE louer_hotel DROP CONSTRAINT FK_70C4104FB897366B');
        $this->addSql('ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD193B1E7706E');
        $this->addSql('ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD193220C6AD0');
        $this->addSql('ALTER TABLE ouverture_restaurant DROP CONSTRAINT FK_697FD19358C54515');
        $this->addSql('ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803CA76ED395');
        $this->addSql('ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803C44973C78');
        $this->addSql('ALTER TABLE payer_billet DROP CONSTRAINT FK_4744803CB897366B');
        $this->addSql('ALTER TABLE remboursement DROP CONSTRAINT FK_C0C0D9EF19EB6921');
        $this->addSql('ALTER TABLE remboursement_billet DROP CONSTRAINT FK_B9B130B1F61EE8B');
        $this->addSql('ALTER TABLE remboursement_billet DROP CONSTRAINT FK_B9B130B1102C441');
        $this->addSql('ALTER TABLE remboursement_hotel DROP CONSTRAINT FK_D7E7E7CF61EE8B');
        $this->addSql('ALTER TABLE remboursement_hotel DROP CONSTRAINT FK_D7E7E7CCB4C1B45');
        $this->addSql('ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43A19EB6921');
        $this->addSql('ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43AB1E7706E');
        $this->addSql('ALTER TABLE reserver_restaurant DROP CONSTRAINT FK_25F6B43AB897366B');
        $this->addSql('ALTER TABLE restaurant DROP CONSTRAINT FK_EB95123FE43A64F9');
        $this->addSql('DROP TABLE acheter_produit');
        $this->addSql('DROP TABLE biome');
        $this->addSql('DROP TABLE chambre');
        $this->addSql('DROP TABLE date');
        $this->addSql('DROP TABLE dinosaure');
        $this->addSql('DROP TABLE enclos');
        $this->addSql('DROP TABLE format_billet');
        $this->addSql('DROP TABLE format_chambre');
        $this->addSql('DROP TABLE horaire');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE jour');
        $this->addSql('DROP TABLE louer_hotel');
        $this->addSql('DROP TABLE ouverture_restaurant');
        $this->addSql('DROP TABLE payer_billet');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE remboursement');
        $this->addSql('DROP TABLE remboursement_billet');
        $this->addSql('DROP TABLE remboursement_hotel');
        $this->addSql('DROP TABLE reserver_restaurant');
        $this->addSql('DROP TABLE restaurant');
        $this->addSql('DROP TABLE "user"');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
