<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddLevelToUsers extends Migration
{
    public function up()
    {
        $fields = [
            'level' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
                'null' => true,
                'after' => 'username',
            ],
        ];
        $this->forge->addColumn('users', $fields);
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'level');
    }
}