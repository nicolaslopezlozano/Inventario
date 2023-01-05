<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventario;
use App\CarritoCompra;
use App\CostoTransporte;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class SpaghettiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $costos_transporte = CostoTransporte::pluck('nombre_ciudad', 'precio');
        return view('Spaghetti.comprar', compact('costos_transporte'));
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
        $cantidad_inventario = Inventario::all()->first();
        $data = request()->validate([
            'cantidad' => 'required'
        ],[
            'cantidad.required' => 'El campo es requerido'
            // 'cantidad.number' => 'Solo se admiten numeros'
        ]);

        if($cantidad_inventario->cantidad >= (int)$data['cantidad'])
        {
            CarritoCompra::create([
                'cantidad' => $data['cantidad'],
                'fecha' => Carbon::now()->format('Y-m-d'),
                'inventario_id' => '1',
                'costo_transporte_id' => '1',
                'usuario_id' => Auth::user()->id,
            ]);
        }
        else
        {
            \Debugbar::info("pailas, muchos y no hay");
        }

        return redirect()->route('spaghetti.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
