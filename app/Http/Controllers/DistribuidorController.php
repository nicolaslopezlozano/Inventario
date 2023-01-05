<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

use DebugBar\StandardDebugBar;
use App\Role_User;
use App\Role;
use App\Agente;


class DistribuidorController extends Controller
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
        $agente = Agente::where('nombre_agente', '=', 'Distribuidor')->value('id');       
        $roles = Role::all();
        $rolesuser = Role_User::all();
        $users = User::where('agente_id', $agente)->get();
    	return view('agentes.distribuidor.listado_distribuidor', compact('users', 'notification', 'roles', 'rolesuser'));     
    }

    public function create()
    {
        $rol = Role::all();
        return view('agentes.distribuidor.agregar_distribuidor', compact('rol'));
    }

    public function store()
    {
        $data = request()->validate([
                'name' => 'required',
                'password' => '',
                'number' => 'required',
                'nit' => 'required',
                'direccion' => 'required',
                'email' => 'required'
        ], [
            'name.required' => 'El campo es requerido',
            'number.required' => 'El campo es requerido',
            'direccion.required' => 'El campo es requerido',
            'email.required' => 'El campo es requerido',
            'nit.required' => 'El campo es requerido'

        ]);
        $agente = Agente::where('nombre_agente', '=', 'Distribuidor')->value('id');
        $rol = Role::where('name', '=', 'Usuario')->first();

        $user = User::create([
                    'name' => $data['name'],
                    'nit' => $data['nit'], 
                    'password' => bcrypt($data['password']),
                    'telefono' => $data['number'],
                    'direccion' => $data['direccion'],
                    'email' => $data['email'],
                    'agente_id' => $agente
                ]);
        $user->attachRole($rol);

        return redirect()->route('distribuidor.list');
    }

    public function show(User $user)
    {   
        $rol_user = Role_User::where('user_id', Auth::user()->id)->value('role_id');
        $rol = Role::find($rol_user);
        return view('agentes.distribuidor.edit_distribuidor', compact('user', 'rol'));
    }

    public function update(User $user)
    {
        $data = request()->all();
        $agente = Agente::where('nombre_agente', '=', 'Distribuidor')->value('id');
        $rol = Role::where('name', '=', 'Usuario')->first();

        $user = User::find($user->id);
        $user->nit = $data['nit'];
        $user->telefono = $data['number'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->direccion = $data['direccion'];
        $user->update();
        return redirect()->route('distribuidor.list');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('distribuidor.list');
    }

}