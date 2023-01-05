<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarritoCompra;
use App\CostoTransporte;
use App\Inventario;
use App\Venta;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class CarritoCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costos = CostoTransporte::all();
        $carritos = CarritoCompra::all();
        foreach($carritos as $carrito)
        {
            if($carrito->usuario_id == Auth::user()->id)
            {
                return view('CarritoCompra.ver_carrito', compact('costos', 'carritos'));
            }
        }
        return redirect()->route('spaghetti.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $compra = CarritoCompra::find($id);
        $ciudades = CostoTransporte::all();

        return view('CarritoCompra.editar_carrito', compact('compra','ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarritoCompra $compra)
    {
        $compra = request()->all();

        $inventario = Inventario::all()->first();        

        $precioUnidad = $inventario->precio_neto / $inventario->cantidad;
        $precioVenta = $precioUnidad * (int)$compra['cantidad'];
        $inventario->cantidad = $inventario->cantidad - $compra['cantidad'];
        $inventario->precio_neto = $inventario->precio_neto - $precioVenta;
        $inventario->update();

        $venta = Venta::create([
            'cantidad' => $compra['cantidad'],
            'precio' => $precioVenta,
            'fecha' => Carbon::now()->format('Y-m-d'),
            'usuario_id' => Auth::user()->id,
        ]);

        // dd($compra['id']);
        CarritoCompra::destroy($compra['id']);

        return redirect()->route('carrito.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        dd($id);

        CarritoCompra::destroy($id);

        return redirect()->route('carrito.index');
    }
}
