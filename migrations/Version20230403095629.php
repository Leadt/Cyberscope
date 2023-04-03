<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230403095629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__commentaire AS SELECT id, texte_com, user FROM commentaire');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('CREATE TABLE commentaire (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, post_id INTEGER DEFAULT NULL, texte_com VARCHAR(100) NOT NULL, user VARCHAR(20) NOT NULL, CONSTRAINT FK_67F068BC4B89032C FOREIGN KEY (post_id) REFERENCES post (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO commentaire (id, texte_com, user) SELECT id, texte_com, user FROM __temp__commentaire');
        $this->addSql('DROP TABLE __temp__commentaire');
        $this->addSql('CREATE INDEX IDX_67F068BC4B89032C ON commentaire (post_id)');
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER DEFAULT NULL, titre_post VARCHAR(100) NOT NULL, description_post VARCHAR(155) NOT NULL, image_post VARCHAR(20) DEFAULT NULL, cent BOOLEAN DEFAULT 0 NOT NULL, coeur BOOLEAN DEFAULT 0 NOT NULL, pouce BOOLEAN DEFAULT 0 NOT NULL, poulpe BOOLEAN DEFAULT 0 NOT NULL, CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO post (id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe) SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DA76ED395 ON post (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__commentaire AS SELECT id, texte_com, user FROM commentaire');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('CREATE TABLE commentaire (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, texte_com VARCHAR(100) NOT NULL, user VARCHAR(20) NOT NULL)');
        $this->addSql('INSERT INTO commentaire (id, texte_com, user) SELECT id, texte_com, user FROM __temp__commentaire');
        $this->addSql('DROP TABLE __temp__commentaire');
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER DEFAULT NULL, commentaires_id INTEGER DEFAULT NULL, titre_post VARCHAR(100) NOT NULL, description_post VARCHAR(155) NOT NULL, image_post VARCHAR(20) DEFAULT NULL, cent BOOLEAN DEFAULT 0 NOT NULL, coeur BOOLEAN DEFAULT 0 NOT NULL, pouce BOOLEAN DEFAULT 0 NOT NULL, poulpe BOOLEAN DEFAULT 0 NOT NULL, CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE, CONSTRAINT FK_5A8A6C8D17C4B2B0 FOREIGN KEY (commentaires_id) REFERENCES commentaire (id) ON UPDATE NO ACTION ON DELETE NO ACTION NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO post (id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe) SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DA76ED395 ON post (user_id)');
        $this->addSql('CREATE INDEX IDX_5A8A6C8D17C4B2B0 ON post (commentaires_id)');
    }
}
