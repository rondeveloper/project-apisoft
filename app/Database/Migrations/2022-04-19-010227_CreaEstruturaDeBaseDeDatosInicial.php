<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaEstruturaDeBaseDeDatosInicial extends Migration
{
    public function up()
    {
        $sql = file_get_contents(__DIR__ . '/sql-initial-database-structure/db_operaciones.sql');
        mysqli_multi_query($this->db->connID, $sql);
    }

    public function down()
    {
        $sql = file_get_contents(__DIR__ . '/sql-initial-database-structure/db_operaciones.rollback.sql');
        mysqli_multi_query($this->db->connID, $sql);
    }
}
