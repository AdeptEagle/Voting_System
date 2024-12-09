<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AccountSeeder extends Seeder
{
    public function run()
    {
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        User::updateOrCreate(
            ['username' => 'admin'],
            [
                'password' => bcrypt('adminpassword'),
                'role_id' => $adminRole->id,
            ]
        );

        User::updateOrCreate(
            ['username' => 'user'],
            [
                'password' => bcrypt('userpassword'),
                'role_id' => $userRole->id,
            ]
        );
    }
}
