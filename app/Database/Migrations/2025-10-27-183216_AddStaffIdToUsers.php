<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStaffIdToUsers extends Migration
{
    public function up()
    {
        $fields = [
            'staff_id' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'after'      => 'updated_at',
            ],
        ];
        $this->forge->addColumn('users', $fields);
        $this->forge->addKey('staff_id');
    }

    public function down()
    {
        $this->forge->dropColumn('users', 'staff_id');
    }
}