<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;
use Config\Database;

class LlenarTablaRevisionesAuxiliar extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $db = Database::connect();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'fecha' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
                'observaciones' => $faker->words(15 ,true),
                'rendimiento' => $faker->numberBetween(1,5),
                'estado' => $faker->numberBetween(1,4),
            ];
            
            $db->table('revisiones_auxiliar')->insert($data);
        }
    }
}
