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
          ['name' => 'user', 'description' => 'permisos de usuario'],
          ['name' => 'admin', 'description' => 'permisos de administrador'],
          ['name' => 'superadmin', 'description' => 'permisos de superadmin']
        ];
        foreach($roles as $role){
          Role::create($role);
        }
    }
}
