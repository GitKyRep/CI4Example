<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guest extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id'           => [
				'type'              => 'INT',
				'constraint'        => 20,
				'unsigned'          => TRUE,
				'auto_increment'    => TRUE
			],
			'name'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'email'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '100',
			],
			'phone'         => [
				'type'              => 'VARCHAR',
				'constraint'        => '15',
			],
			'address'         => [
				'type'              => 'TEXT',
				'null'           => TRUE,
			],

		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('guest');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('guest');
	}
}
