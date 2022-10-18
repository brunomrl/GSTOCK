<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioFakeSeeder extends Seeder
{
    public function run()
    {
        $usuarioModel = new \APP\Models\UsuarioModel();
        $faker = \Faker\Factory::create();
        $criarQuantosUsuarios = 50;

        for ($i = 0; $i < $criarQuantosUsuarios; $i++) {
            array_push($usuariosPush, [
                'nome' => $faker->unique()->name,
                'email' => $faker->unique()->email,
                'password_hash' => '123456',
                'ativo' => true,
            ]);
        }

        echo '<pre>';
        print_r($usuariosPush);
        exit;
    }
}
