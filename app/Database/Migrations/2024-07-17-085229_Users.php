<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'       => ['type' => 'INT', 'constraint' => 11, 'unsigned' => TRUE, 'auto_increment' => TRUE],
            'username' => ['type' => 'VARCHAR', 'constraint' => 100, 'unique' => TRUE],
            'email'    => ['type' => 'VARCHAR', 'constraint' => 255, 'unique' => TRUE],
            'password' => ['type' => 'VARCHAR', 'constraint' => 255],
            'role'     => ['type' => 'ENUM', 'constraint' => "'admin','user'", 'default' => 'user'],
            'created_at' => ['type' => 'DATETIME', NULL],
            'updated_at' => ['type' => 'DATETIME', NULL],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
