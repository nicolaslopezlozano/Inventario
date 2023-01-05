<?php

use Illuminate\Database\Seeder;
use App\Agente;

class AgentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Agente::create([
                	'nombre_agente' => 'Proveedor'
                ]);

         Agente::create([
                	'nombre_agente' => 'Detallista'
                ]);

         Agente::create([
                	'nombre_agente' => 'Distribuidor'
                ]);

         Agente::create([
                    'nombre_agente' => 'Jefe de Proceso'
                ]);
    }
}
