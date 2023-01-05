<?php

use Illuminate\Database\Seeder;
use App\Inventario;
use App\Producto;

class InventariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        Inventario::create([
        	'cantidad' => '0',
        	'precio_neto' => '0',
        	'producto_id' => $producto
        ]);
    }
}
