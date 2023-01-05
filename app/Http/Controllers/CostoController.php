<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Costo;
use App\Produccion;
use App\CompraProveedor;
use Carbon\Carbon;
use App\Inventario;
use App\Producto;

class CostoController extends Controller
{
    //
    public function store()
    {
        $data = request()->validate([
                'number' => 'required',
                'proveedor' => ''
        ], [
            'number.required' => 'El campo es requerido',
            'proveedor.required' => 'El campo es requerido'

        ]);

        $produccion = Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->value('id');
       	$precio = CompraProveedor::where('id', $data['proveedor'])->value('precio');
       	$precio = $precio*(int)$data['number'];
        
        Costo::create([
            'produccion_id' => $produccion,
            'precio' => $precio, 
            'cantidad' => $data['number'],
            'proveedor_id' => $data['proveedor']
        ]);
        //inventario
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        $inventario = Inventario::where('producto_id', $producto)->value('id');
        $precioinventario = Inventario::where('producto_id', $producto)->value('precio_neto');
        $precionuevo = (int)$precioinventario + $precio;

        $invent = Inventario::find($inventario);
        $invent->precio_neto = $precionuevo;
        $invent->update();

        //
        $costos = Costo::where('produccion_id', $produccion)->get();
        $sumaprecio = 0;
        foreach ($costos as $costo) {
        	$sumaprecio = (int)$sumaprecio + (int)$costo->precio;
        }

        $produccion = Produccion::find($produccion);
        $produccion->precio_produccion = $sumaprecio;
        $produccion->update();
       
        return redirect()->route('produccion.list');
    }

    public function destroy(Costo $costo)
    {
    	//inventario
    	$precioviejo = Costo::where('id', $costo->id)->value('precio');
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        $inventario = Inventario::where('producto_id', $producto)->value('id');
        $precioinventario = Inventario::where('producto_id', $producto)->value('precio_neto');
        $precionuevo = (int)$precioinventario - (int)$precioviejo;

        $invent = Inventario::find($inventario);
        $invent->precio_neto = $precionuevo;
        $invent->update();

        //

        $costo->delete();
        
        $produccion = Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->value('id');

        $costos = Costo::where('produccion_id', $produccion)->get();
        $sumaprecio = 0;
        foreach ($costos as $costo) {
        	$sumaprecio = (int)$sumaprecio + (int)$costo->precio;
        }

        $produccion = Produccion::find($produccion);
        $produccion->precio_produccion = $sumaprecio;
        $produccion->update();

        return redirect()->route('produccion.list');
    }
}
