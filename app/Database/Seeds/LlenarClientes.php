<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

use Faker\Factory;
use Config\Database;

class LlenarClientes extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $db = Database::connect();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nombre' => $faker->name(),
                'telefono' => $faker->phoneNumber(),
                'email' => $faker->email(),
                'ci' => $faker->randomNumber(7),
                'empresa' => $faker->company(),
                'nit' => $faker->randomNumber(7),
                'observaciones' => $faker->words(15 ,true),
                'tipo' => $faker->numberBetween(1,4),
                'estado' => $faker->numberBetween(1,2),
            ];
            
            $db->table('clientes')->insert($data);
        }
    }
}
