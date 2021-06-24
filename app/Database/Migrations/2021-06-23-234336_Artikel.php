<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Artikel extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_artikel'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'judul_artikel'       => [
				'type' => 'varchar',
				'constraint'     => '255',
			],
			'isi_artikel' => [
				'type' => 'text',
			],
			'tgl_artikel' => [
				'type' => 'DATETIME',
			],
			'gambar_artikel'       => [
				'type' => 'varchar',
				'constraint'     => '255',
			]
		]);
		$this->forge->addKey('id_artikel', true);
		$this->forge->createTable('artikel');
	}

	public function down()
	{
		$this->forge->dropTable('artikel');
	}
}
