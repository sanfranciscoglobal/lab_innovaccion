<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\RoleUser;

class UsersSeeder extends Seeder
{
    
     
    public function run()
    {/*
        $sql  = "ALTER SEQUENCE users_id_seq RESTART WITH 1;";
        $sql .= 'TRUNCATE users CASCADE;';
        DB::connection()->getPdo()->exec($sql);

        // factory(User::class, 3)->create();
        $users = [
            [
                'name' => 'Test User',
                'email' => "user@email.com",
                'email_verified_at' => now(),
                'password' => Hash::make('Passw0rd!'), // password
                'remember_token' => Str::random(10)
            ],
            [
                'name' => 'Test Admin',
                'email' => "admin@email.com",
                'email_verified_at' => now(),
                'password' => Hash::make('Passw0rd!'), // password
                'remember_token' => Str::random(10)
            ],
        ];
        foreach($users as $usr){
          User::create($usr);
        }

        $usersRoles = [
            ['user_id' => 1, 'role_id' => 1],
            ['user_id' => 2, 'role_id' => 2],
        ];
        foreach($usersRoles as $ur){
          RoleUser::create($ur);
        }
        */
    }
    
     
}
