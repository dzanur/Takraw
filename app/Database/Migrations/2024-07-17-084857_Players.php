<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Players extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'nama_pemain'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'nomor_punggung' => ['type' => 'INT', 'constraint' => 3],
            'posisi'       => ['type' => 'VARCHAR', 'constraint' => 50],
            'tanggal_lahir' => ['type' => 'DATE'],
            'negara'       => ['type' => 'VARCHAR', 'constraint' => 50],
            'id_tim'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('id_tim', 'teams', 'id');
        $this->forge->createTable('players');
    }

    public function down()
    {
        $this->forge->dropTable('players');
    }
}
