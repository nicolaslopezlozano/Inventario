<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::where('name', '=', 'Administrador')->first();
        $user = Role::where('name', '=', 'Usuario')->first();
        $jefe = Role::where('name', '=', 'Jefe')->first();
        //$admin->attachPermission(array (Permission::all()));

        /*
        * SIDEBAR - BEGGIN
        */


        //Usuarios
        $permission  =  Permission::create([
                        'name' => 'acceder-usuarios',
                        'display_name' => 'acceder-usuarios',
                        'description' => 'Acceder Usuarios'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Agentes
        $permission  =  Permission::create([
                        'name' => 'acceder-agentes',
                        'display_name' => 'acceder-agentes',
                        'description' => 'Acceder Agentes'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Producción
        $permission  =  Permission::create([
                        'name' => 'acceder-produccion',
                        'display_name' => 'acceder-produccion',
                        'description' => 'Acceder Producción'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Spaguetti
        $permission  =  Permission::create([
                        'name' => 'acceder-spaguetti',
                        'display_name' => 'acceder-spaguetti',
                        'description' => 'Acceder Producción Spaguetti'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        $user->attachPermission($permission);

        //Carrito
        $permission  =  Permission::create([
                        'name' => 'acceder-carrito',
                        'display_name' => 'acceder-carrito',
                        'description' => 'Acceder Producción Carrito'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        //Inventario
        $permission  =  Permission::create([
                        'name' => 'acceder-inventario',
                        'display_name' => 'acceder-inventario',
                        'description' => 'Acceder Inventario'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Utilidad
        $permission  =  Permission::create([
                        'name' => 'acceder-utilidad',
                        'display_name' => 'acceder-utilidad',
                        'description' => 'Acceder Utilidad'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);


        /*
        * SIDEBAR - END
        */


        //Permisos
        $permission  =  Permission::create([
                        'name' => 'asignacion-permisos',
                        'display_name' => 'asignacion-permisos',
                        'description' => 'Asigncacion Permisos'
                    ]);
        $admin->attachPermission($permission);
        //Jefes de Proceso
        $permission  =  Permission::create([
                        'name' => 'ver-jefes-proceso',
                        'display_name' => 'ver-jefes-proceso',
                        'description' => 'Ver Jefes de Proceso'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-jefes-proceso',
                        'display_name' => 'registrar-jefes-proceso',
                        'description' => 'Registrar Jefes de Proceso'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-jefes-proceso',
                        'display_name' => 'editar-jefes-proceso',
                        'description' => 'Editar Jefes de Proceso'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-jefes-proceso',
                        'display_name' => 'eliminar-jefes-proceso',
                        'description' => 'Eliminar Jefes de Proceso'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Proveedores
        $permission  =  Permission::create([
                        'name' => 'ver-proveedores',
                        'display_name' => 'ver-proveedores',
                        'description' => 'Ver Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-proveedores',
                        'display_name' => 'registrar-proveedores',
                        'description' => 'Registrar Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-proveedores',
                        'display_name' => 'editar-proveedores',
                        'description' => 'Editar Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-proveedores',
                        'display_name' => 'eliminar-proveedores',
                        'description' => 'Eliminar Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Detallistas
        $permission  =  Permission::create([
                        'name' => 'ver-detallistas',
                        'display_name' => 'ver-detallistas',
                        'description' => 'Ver Detallistas'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-detallistas',
                        'display_name' => 'registrar-detallistas',
                        'description' => 'Registrar Detallistas'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-detallistas',
                        'display_name' => 'editar-detallistas',
                        'description' => 'Editar Detallistas'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-detallistas',
                        'display_name' => 'eliminar-detallistas',
                        'description' => 'Eliminar Detallistas'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Distribuidores
        $permission  =  Permission::create([
                        'name' => 'ver-distribuidores',
                        'display_name' => 'ver-distribuidores',
                        'description' => 'Ver Distribuidores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-distribuidores',
                        'display_name' => 'registrar-distribuidores',
                        'description' => 'Registrar Distribuidores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-distribuidores',
                        'display_name' => 'editar-distribuidores',
                        'description' => 'Editar Distribuidores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-distribuidores',
                        'display_name' => 'eliminar-distribuidores',
                        'description' => 'Eliminar Distribuidores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Compra a Proveedores
        $permission  =  Permission::create([
                        'name' => 'ver-compra-proveedores',
                        'display_name' => 'ver-compra-proveedores',
                        'description' => 'Ver Compra a Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-compra-proveedores',
                        'display_name' => 'registrar-compra-proveedores',
                        'description' => 'Registrar Compra a Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-compra-proveedores',
                        'display_name' => 'editar-compra-proveedores',
                        'description' => 'Editar Compra a Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-compra-proveedores',
                        'display_name' => 'eliminar-compra-proveedores',
                        'description' => 'Eliminar Compra a Proveedores'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Producción por Dia
        $permission  =  Permission::create([
                        'name' => 'ver-produccion-dia',
                        'display_name' => 'ver-produccion-dia',
                        'description' => 'Ver Producción por Dia'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-produccion-dia',
                        'display_name' => 'registrar-produccion-dia',
                        'description' => 'Registrar Producción por Dia'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-produccion-dia',
                        'display_name' => 'editar-produccion-dia',
                        'description' => 'Editar Producción por Dia'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-produccion-dia',
                        'display_name' => 'eliminar-produccion-dia',
                        'description' => 'Eliminar Producción por Dia'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

        //Costo de Transporte por Ciudad
        $permission  =  Permission::create([
                        'name' => 'ver-costo-transporte',
                        'display_name' => 'ver-costo-transporte',
                        'description' => 'Ver Costo de Transporte por Ciudad'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'registrar-costo-transporte',
                        'display_name' => 'registrar-costo-transporte',
                        'description' => 'Registrar Costo de Transporte por Ciudad'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'editar-costo-transporte',
                        'display_name' => 'editar-costo-transporte',
                        'description' => 'Editar Costo de Transporte por Ciudad'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        //
        $permission  =  Permission::create([
                        'name' => 'eliminar-costo-transporte',
                        'display_name' => 'eliminar-costo-transporte',
                        'description' => 'Eliminar Costo de Transporte por Ciudad'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);
        

        //Ventas
        $permission  =  Permission::create([
                        'name' => 'ver-carrito',
                        'display_name' => 'ver-carrito',
                        'description' => 'Ver Carrito'
                    ]);
        $admin->attachPermission($permission);
        $user->attachPermission($permission);

        $permission  =  Permission::create([
                        'name' => 'ver-pedido',
                        'display_name' => 'ver-pedido',
                        'description' => 'Ver Pedido'
                    ]);
        $admin->attachPermission($permission);
        $jefe->attachPermission($permission);

    }
}
