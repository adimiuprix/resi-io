<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin_tbl extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_admin' => [
                'type'           => 'INT',
                'constraint'     => 255,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
            'username' => [
                'type'  => 'VARCHAR',
                'constraint'  => 100,
            ],
            'password' => [
                'type'       => 'VARCHAR',
                'constraint' => 255
            ],
        ]);
        $this->forge->addKey('id_admin', true);
        $this->forge->createTable('Admin_tbl');
    }

    public function down()
    {
        $this->forge->dropTable('id_admin');
    }
}
