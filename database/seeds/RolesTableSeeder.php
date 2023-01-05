<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'display_name' => 'Administrador de Software', 
            'description' => 'Administrador de Software' 
        ]);

        Role::create([
            'name' => 'Usuario',
            'display_name' => 'Usuario de Doria', 
            'description' => 'Usuario de Doria' 
        ]);

        Role::create([
            'name' => 'Jefe',
            'display_name' => 'Jefe de Proceso de Doria', 
            'description' => 'Jefe de Proceso de Doria' 
        ]);
    }
}
