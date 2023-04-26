<?php

namespace DoctrineMigrations;

use Doctrine\DBAL\Migrations\AbstractMigration,
    Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your need!
 */
class Version20221110103500 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql('INSERT INTO user (Email, CreationTime, Status) VALUES ("ava@jensentechnologies.com", "'.date("Y-m-d H:i:s").'", 1)');
        
    }

    public function down(Schema $schema)
    {
        $this->addSql('DELETE FROM user WHERE Email = "ava@jensentechnologies.com"');
        
    }
}
