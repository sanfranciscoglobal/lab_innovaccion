<?php

use Illuminate\Database\Seeder;

use App\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
          ['id' => 1, 'name' => 'user', 'description' => 'permisos de usuario'],
          ['id' => 2, 'name' => 'admin', 'description' => 'permisos de administrador'],
          ['id' => 3, 'name' => 'superadmin', 'description' => 'permisos de superadmin']
        ];
        foreach($roles as $role){
          Role::create($role);
        }
    }
}
