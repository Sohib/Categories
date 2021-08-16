<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCategories extends Migration
{
	public function up()
	{
		//
        $fields = [
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],

            'name' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],

            // if null mean has no parents
            'parent_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ]
        ];
        $this->forge->addField($fields);

        $this->forge->addKey('id', TRUE);
        $this->forge->addForeignKey('parent_id','categories','id','CASCADE','CASCADE');
        $this->forge->createTable('categories');
	}

	public function down()
	{
		//
        $this->forge->dropTable('categories');
	}
}
