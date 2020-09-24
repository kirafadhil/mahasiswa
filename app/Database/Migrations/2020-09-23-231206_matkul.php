<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Matkul extends Migration
{
	public function up()
	{

		$this->forge->addField([
			'id_matkul' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nm_matkul' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'ruang_matkul' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'dosen_matkul' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
		]);
		$this->forge->addKey('id_matkul', TRUE);
		$this->forge->createTable('matkul');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('matkul');
	}
}
