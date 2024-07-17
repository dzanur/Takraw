<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'judul'            => ['type' => 'VARCHAR', 'constraint' => 255],
            'konten'          => ['type' => 'TEXT'],
            'tanggal_publikasi' => ['type' => 'DATE'],
            'id_tim'           => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'null' => TRUE],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_tim', 'teams', 'id');
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
