<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleAdmin = Role::firstOrCreate(['name' => 'admin']);
        $roleUser = Role::firstOrCreate(['name' => 'user']);

        $admin = User::firstOrCreate([
            'name' => 'John Doe',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $user = User::firstOrCreate([
            'name' => 'lucky morther',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $admin->assignRole($roleAdmin);
        $user->assignRole($roleUser);

    }
}
