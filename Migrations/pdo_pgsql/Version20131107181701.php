<?php

namespace Icap\LessonBundle\Migrations\pdo_pgsql;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated migration based on mapping information: modify it with caution
 *
 * Generation date: 2013/11/07 06:17:02
 */
class Version20131107181701 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE icap__lesson_chapter ALTER slug 
            SET 
                NOT NULL
        ");
    }

    public function down(Schema $schema)
    {
        $this->addSql("
            ALTER TABLE icap__lesson_chapter ALTER slug 
            DROP NOT NULL
        ");
    }
}