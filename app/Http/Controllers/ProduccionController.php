<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Produccion;
use App\Costo;
use App\User;
use App\Agente;
use App\Producto;
use App\Inventario;
use App\CompraProveedor;

class ProduccionController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$todayDate = Carbon::now();
        $todayDate = $todayDate->format('Y-m-d');
        $produccion = Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->get();
        $cantidad = $produccion->count();
        $costos = Costo::where('produccion_id', Produccion::whereDate('fecha', Carbon::now()->format('Y-m-d'))->value('id'))->get();
        $agente = Agente::where('nombre_agente', '=', 'Proveedor')->value('id');       
        $users = User::all();
        $compraproveedores = CompraProveedor::all();
        $proveedores = CompraProveedor::all();
        //$cantidad = 1;
    	return view('Produccion.listado_produccion', compact('produccion', 'cantidad', 'costos', 'proveedores', 'users', 'compraproveedores'));     
    }

    public function create()
    {
    	$todayDate = Carbon::now();
        $todayDate = $todayDate->format('Y-m-d');
        $costos = Costo::where('fecha', $todayDate);
        return view('Produccion.agregar_produccion', compact('todayDate', 'costos'));
    }

    public function store()
    {
        $data = request()->validate([
                'number' => 'required',
                'fecha' => ''
        ], [
            'number.required' => 'El campo es requerido',
            'fecha.required' => 'El campo es requerido'

        ]);

        //$fecha = Carbon::createFromFormat('Y-m-d', $data['fecha']);
        //dd($fecha);
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        $produccion = Produccion::create([
            'cantidad' => $data['number'],
            'fecha' => $data['fecha'], 
            'precio_produccion' => 0,
            'producto_id' => $producto
        ]);

        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');
        $inventario = Inventario::where('producto_id', $producto)->value('id');
        $cantidad = Inventario::where('producto_id', $producto)->value('cantidad');

        $cantidad = (int)$cantidad + (int)$data['number'];

        $invent = Inventario::find($inventario);
        $invent->cantidad = $cantidad;
        $invent->update();
        
        //$user->attachRole($rol);

        return redirect()->route('produccion.list');
    }

    public function show(Produccion $compra)
    {   
        $todayDate = Carbon::now();
        $todayDate = $todayDate->format('Y-m-d');
        $costos = Costo::where('fecha', $todayDate);
        return view('Produccion.edit_produccion', compact('todayDate', 'costos', 'compra'));
    }

    public function update(Produccion $compra)
    {
        $data = request()->all();
        $producto = Producto::where('nombre_producto', 'Spaguetti')->value('id');

        $inventario = Inventario::where('producto_id', $producto)->value('id');
        $cantidadinventario = Inventario::where('producto_id', $producto)->value('cantidad');
        
        $cantidadvieja = Produccion::where('id', $compra->id)->value('cantidad');
        
        $cantidadresta = (int)$cantidadvieja - (int)$data['number'];

        $cantidadnueva = $cantidadinventario - $cantidadresta;

        $invent = Inventario::find($inventario);
        $invent->cantidad = $cantidadnueva;
        $invent->update();


        $produccion = Produccion::find($compra->id);
        $produccion->cantidad = $data['number'];
        $produccion->fecha = $data['fecha'];
        $produccion->update();

        return redirect()->route('produccion.list');
    }

    public function destroy(Produccion $compra)
    {
        $compra->delete();
        return redirect()->route('produccion.list');
    }
}
