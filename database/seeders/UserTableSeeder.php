<?php

namespace Database\Seeders;

use Hash;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::create([
        //     'name' => 'admin', 
        //     'email' => 'admin@gmail.com',
        //     'password' => Hash::make('12345678')
        // ]);
         
        // $role = Role::find(1);

        // $permissions = Permission::pluck('id', 'id')->all();
   
        // $role->syncPermissions($permissions);
     
        // $user->assignRole([$role->id]);

        $user = User::create([
            'member_mid' => 'superadmin',
            'name' => 'superadmin', 
            'email' => 'superadmin@gmail.com',
            'password' => Hash::make('12345678')
        ]);
         
        $role = Role::find(4);

        $permissions = Permission::pluck('id', 'id')->all();
   
        $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}