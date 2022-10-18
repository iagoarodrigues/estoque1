<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\models\Servico;

class ServicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servico::create([
            'nome'          =>'Teclado',
<<<<<<< Updated upstream
            'valor'         => 260
=======
>>>>>>> Stashed changes
        ]);

        Servico::create([
            'nome'          =>'Mouse',
<<<<<<< Updated upstream
            'valor'         => 150
=======
            
>>>>>>> Stashed changes
        ]);

        Servico::create([
            'nome'          =>'Monitor 29',
<<<<<<< Updated upstream
            'valor'         => 2200
=======
            
>>>>>>> Stashed changes
        ]);
    }
}
