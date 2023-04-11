<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230406140914 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE post ADD COLUMN affichage BOOLEAN DEFAULT 0 NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TEMPORARY TABLE __temp__post AS SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM post');
        $this->addSql('DROP TABLE post');
        $this->addSql('CREATE TABLE post (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, user_id INTEGER DEFAULT NULL, titre_post VARCHAR(100) NOT NULL, description_post VARCHAR(1000) NOT NULL, image_post VARCHAR(20) DEFAULT NULL, cent BOOLEAN DEFAULT 0 NOT NULL, coeur BOOLEAN DEFAULT 0 NOT NULL, pouce BOOLEAN DEFAULT 0 NOT NULL, poulpe BOOLEAN DEFAULT 0 NOT NULL, CONSTRAINT FK_5A8A6C8DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) NOT DEFERRABLE INITIALLY IMMEDIATE)');
        $this->addSql('INSERT INTO post (id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe) SELECT id, user_id, titre_post, description_post, image_post, cent, coeur, pouce, poulpe FROM __temp__post');
        $this->addSql('DROP TABLE __temp__post');
        $this->addSql('CREATE INDEX IDX_5A8A6C8DA76ED395 ON post (user_id)');
    }
}
