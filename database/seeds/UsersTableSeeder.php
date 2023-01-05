<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Agente;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Agentes
        $proveedor = Agente::where('nombre_agente', '=', 'Proveedor')->value('id');
        $detallista = Agente::where('nombre_agente', '=', 'Detallista')->value('id');
        $distribuidor = Agente::where('nombre_agente', '=', 'Distribuidor')->value('id');
        $jefeproceso = Agente::where('nombre_agente', '=', 'Jefe de Proceso')->value('id');
        //Roles
        $admin = Role::where('name', '=', 'Administrador')->first();
        $usua = Role::where('name', '=', 'Usuario')->first();
        $jefe = Role::where('name', '=', 'Jefe')->first();

        $user = User::create([
                	'name' => 'Camilo',
                	'email' => 'camilorodri28@outlook.com',
                    'nit' => '165313',
                    'telefono' => '8542365',
                    'direccion' => 'Calle 12 # 88 - 77',
                	'password' => bcrypt('123')
                ]);
        $user->attachRole($admin);

        $user = User::create([
                    'name' => 'Jefe de Proceso',
                    'email' => 'jefe@outlook.com',
                    'nit' => '4865161',
                    'telefono' => '8429566',
                    'direccion' => 'Calle 1 # 2 - 56',
                    'password' => bcrypt('123'),
                    'agente_id' => $jefeproceso
                ]);
        $user->attachRole($jefe);

        $user = User::create([
                    'name' => 'Detallista',
                    'email' => 'detallista@outlook.com',
                    'nit' => '687978',
                    'telefono' => '894256',
                    'direccion' => 'Calle 15 # 6 - 77',
                    'password' => bcrypt('123'),
                    'agente_id' => $detallista
                ]);
        $user->attachRole($usua);

        $user = User::create([
                    'name' => 'Distribuidor',
                    'email' => 'distribuidor@outlook.com',
                    'nit' => '687978',
                    'telefono' => '894256',
                    'direccion' => 'Calle 15 # 6 - 77',
                    'password' => bcrypt('123'),
                    'agente_id' => $distribuidor
                ]);
        $user->attachRole($usua);

        $user = User::create([
                    'name' => 'Proveedor',
                    'email' => 'proveedor@outlook.com',
                    'nit' => '687978',
                    'telefono' => '894256',
                    'direccion' => 'Calle 15 # 6 - 77',
                    'password' => bcrypt('123'),
                    'agente_id' => $proveedor
                ]);
        $user->attachRole($usua);

    }
}
