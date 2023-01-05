<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompraProveedor;
use App\CostoTransporte;
use App\User;

class CompraProveedorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        $compras = CompraProveedor::all();
    	return view('CompraProveedor.listado_compraProveedor', compact('compras', 'users'));     
    }

    public function create()
    {
    	$proveedores = User::where('agente_id', 1)->get();
        return view('CompraProveedor.agregar_compraProveedor', compact('proveedores'));
    }

    public function store()
    {
        $data = request()->validate([
                'proveedor_id' => 'required',
                'number' => 'required'
        ], [
            'proveedor_id.required' => 'El campo es requerido',
            'number.required' => 'El campo es requerido'
        ]);

        CompraProveedor::create([
            'proveedor_id' => $data['proveedor_id'],
            'precio' => $data['number']
        ]);

        return redirect()->route('compraproveedor.list');
    }

    public function show(CompraProveedor $compra)
    {   
    	$proveedores = User::where('agente_id', 1)->get();
        return view('compraproveedor.edit', compact('compra', 'proveedores'));
    }

    public function update(CompraProveedor $compra)
    {
        $data = request()->all();

        $compraproveedor = CompraProveedor::find($compra->id);
        $compraproveedor->proveedor_id = $data['proveedor_id'];
        $compraproveedor->precio = $data['number'];
        $compraproveedor->update();
        return redirect()->route('compraproveedor.list');
    }

    public function destroy(CompraProveedor $compra)
    {
        $compra->delete();
        return redirect()->route('compraproveedor.list');
    }
}
