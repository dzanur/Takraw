<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matches extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'               => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'tanggal'          => ['type' => 'DATE'],
            'waktu'           => ['type' => 'TIME'],
            'id_tim_home'     => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'id_tim_away'     => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'skor_home'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'skor_away'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'venue'           => ['type' => 'VARCHAR', 'constraint' => 255],
            'laporan_pertandingan' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_tim_home', 'teams', 'id');
        $this->forge->addForeignKey('id_tim_away', 'teams', 'id');
        $this->forge->createTable('matches');
    }

    public function down()
    {
        $this->forge->dropTable('matches');
    }
}
