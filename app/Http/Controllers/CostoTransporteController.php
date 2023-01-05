<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CostoTransporte;

class CostoTransporteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $costos = CostoTransporte::all();
    	return view('costoTransporte.listado_costoTransporte', compact('costos'));     
    }

    public function create()
    {
        return view('costoTransporte.agregar_costoTransporte');
    }

    public function store()
    {
        $data = request()->validate([
                'name' => 'required',
                'number' => 'required'
        ], [
            'name.required' => 'El campo es requerido',
            'number.required' => 'El campo es requerido'
        ]);

        CostoTransporte::create([
            'nombre_ciudad' => $data['name'],
            'precio' => $data['number']
        ]);

        return redirect()->route('costotransporte.list');
    }

    public function show(CostoTransporte $costo)
    {   
        return view('costotransporte.edit', compact('costo'));
    }

    public function update(CostoTransporte $costo)
    {
        $data = request()->all();

        $costotransporte = CostoTransporte::find($costo->id);
        $costotransporte->nombre_ciudad = $data['name'];
        $costotransporte->precio = $data['number'];
        $costotransporte->update();
        return redirect()->route('costotransporte.list');
    }

    public function destroy(CostoTransporte $costo)
    {
        $costo->delete();
        return redirect()->route('costotransporte.list');
    }
}
