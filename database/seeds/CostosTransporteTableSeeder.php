<?php

use Illuminate\Database\Seeder;
use App\CostoTransporte;

class CostosTransporteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CostoTransporte::create([
        	'nombre_ciudad' => 'Bogota',
        	'precio' => 100000
        ]);
    }
}
