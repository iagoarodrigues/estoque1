<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nome'          =>'Teclado',
            'cpf'           => 12345678912,
            'e-mail'        => 'iago157delas@hotmail.com',
            'telefone'      => 31093120
        ]);

        Usuario::create([
            'nome'          =>'Teclado',
            'cpf'           => 12345678912,
            'e-mail'        => 'iago157delas@hotmail.com',
            'telefone'      => 31093120
        ]);

        Usuario::create([
            'nome'          =>'Teclado',
            'cpf'           => 12345678912,
            'e-mail'        => 'iago157delas@hotmail.com',
            'telefone'      => 31093120
        ]);

    }
}
