<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaRevisionesAuxiliar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fecha' => [
                'type' => 'DATETIME',
            ],
            'observaciones' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'rendimiento' => [
                'type' => 'INT',
            ], 
            'estado' => [
                'type' => 'INT',
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('revisiones_auxiliar');
    }

    public function down()
    {
        $this->forge->dropTable('revisiones_auxiliar');
    }
}
