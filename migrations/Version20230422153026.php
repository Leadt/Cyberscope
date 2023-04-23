<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230422153026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER DEFAULT NULL, titre_post VARCHAR(100) NOT NULL, description_post VARCHAR(1000) NOT NULL, image_post VARCHAR(20) DEFAULT NULL, affichage BOOLEAN DEFAULT 0 NOT NULL, CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DA76ED395 ON post (user_id)');
        $this->addSql('CREATE TABLE reaction (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, id_post_id INTEGER NOT NULL, id_user_id INTEGER NOT NULL, cent BOOLEAN DEFAULT 0 NOT NULL, coeur BOOLEAN DEFAULT 0 NOT NULL, poulpe BOOLEAN DEFAULT 0 NOT NULL, pouce BOOLEAN DEFAULT 0 NOT NULL, CONSTRAINT FK_A4D707F79514AA5C FOREIGN KEY (id_post_id) REFERENCES post (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_A4D707F779F37AE5 FOREIGN KEY (id_user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('CREATE INDEX IDX_A4D707F79514AA5C ON reaction (id_post_id)');
        $this->addSql('CREATE INDEX IDX_A4D707F779F37AE5 ON reaction (id_user_id)');
        $this->addSql('CREATE TABLE user (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, pseudo_user VARCHAR(180) NOT NULL, nom_user VARCHAR(30) NOT NULL, prenom_user VARCHAR(30) NOT NULL, mdp_user VARCHAR(20) NOT NULL, photo_user VARCHAR(20) DEFAULT NULL, roles CLOB NOT NULL --(DC2Type:json)
        )');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D649EA5002AD ON user (pseudo_user)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE post');
        $this->addSql('DROP TABLE reaction');
        $this->addSql('DROP TABLE user');
    }
}