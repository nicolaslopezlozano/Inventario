<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'users', 'permissions', 'permission_role', 'roles', 'role_user', 'agentes',
            'costo_transporte', 'producto', 'produccion', 'costos', 'inventario'
        ]);

        $this->call(RolesTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(AgentesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(CostosTransporteTableSeeder::class);
        $this->call(ProductoTableSeeder::class);
        $this->call(InventariosSeeder::class);
    }

    public function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) 
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

    }
}
