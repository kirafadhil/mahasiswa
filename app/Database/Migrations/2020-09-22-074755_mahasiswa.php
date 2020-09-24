<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_mhs' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'nm_mhs' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
			'nim_mhs' => [
				'type' => 'INT',
				'constraint' => 11,
			],
			'jurusan' => [
				'type' => 'VARCHAR',
				'constraint' => 100,
			],
		]);
		$this->forge->addKey('id_mhs', TRUE);
		$this->forge->createTable('mahasiswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mahasiswa', TRUE);
	}
}
