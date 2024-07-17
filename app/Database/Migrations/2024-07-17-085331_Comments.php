<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comments extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'isi_komentar'     => ['type' => 'TEXT'],
            'tanggal_komentar' => ['type' => 'DATETIME'],
            'id_user'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'id_news'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->addForeignKey('id_news', 'news', 'id');
        $this->forge->createTable('comments');
    }

    public function down()
    {
        $this->forge->dropTable('comments');
    }
}
