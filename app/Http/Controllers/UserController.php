<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\Debugbar;

use DebugBar\StandardDebugBar;
use App\Role_User;
use App\Role;
use App\Agente;

class UserController extends Controller
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
        $jefeproceso = Agente::where('nombre_agente', '=', 'Jefe de Proceso')->value('id');       
        $roles = Role::all();
        $rolesuser = Role_User::all();
        $users = User::where('agente_id', $jefeproceso)->get();
    	return view('usuario.listado_usua', compact('users', 'notification', 'roles', 'rolesuser'));     
    }

    public function show_account()
    {
        $user = User::find(Auth::user()->id); 
        $rol_user = Role_User::where('user_id', $user->id)->value('role_id');
        $rol = Role::find($rol_user);

        return view('usuario.perfil_usua', compact('user', 'rol'));
    }
    
    public function create()
    {
        $rol = Role::all();
        return view('usuario.agregar_usua', compact('rol'));
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
        $jefeproceso = Agente::where('nombre_agente', '=', 'Jefe de Proceso')->value('id');
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $user = User::create([
                    'name' => $data['name'],
                    'nit' => $data['nit'],
                    'password' => bcrypt($data['password']),
                    'telefono' => $data['number'],
                    'direccion' => $data['direccion'],
                    'email' => $data['email'],
                    'agente_id' => $jefeproceso
                ]);
        $user->attachRole($jefe);

        return redirect()->route('usuario.list');
    }

    public function show(User $user)
    {   
        $rol_user = Role_User::where('user_id', Auth::user()->id)->value('role_id');
        $rol = Role::find($rol_user);
        return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function update(User $user)
    {
        $data = request()->all();
        $jefeproceso = Agente::where('nombre_agente', '=', 'Jefe de Proceso')->value('id');
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $user = User::find($user->id);
        $user->nit = $data['nit'];
        $user->telefono = $data['number'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->direccion = $data['direccion'];
        $user->update();
        //dd($user);
        return redirect()->route('usuario.list');

        // $user->update(request()->all());
        // $rol_user = Role_User::where('user_id', $user->id)->value('role_id');
        // $rol = Role::find($rol_user);
        // return view('usuario.edit_usua', compact('user', 'rol'));
    }

    public function updatePerfil(User $user)
    {
        $data = request()->all();
        $jefeproceso = Agente::where('nombre_agente', '=', 'Jefe de Proceso')->value('id');
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $user = User::find($user->id);
        $user->nit = $data['nit'];
        $user->telefono = $data['number'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->direccion = $data['direccion'];
        $user->update();
        
        $rol_user = Role_User::where('user_id', $user->id)->value('role_id');
        $rol = Role::find($rol_user);

        return view('usuario.perfil_usua', compact('user', 'rol'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('usuario.list');
    }

}
