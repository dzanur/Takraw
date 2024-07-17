<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Team extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'nama_tim'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'logo'        => ['type' => 'VARCHAR', 'constraint' => 255],
            'negara'      => ['type' => 'VARCHAR', 'constraint' => 50],
            'pelatih'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'stadion_home' => ['type' => 'VARCHAR', 'constraint' => 255],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('teams');
    }

    public function down()
    {
        $this->forge->dropTable('teams');
    }
}
