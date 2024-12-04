<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\RoleUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123456'),
            ],
        ];
        
        foreach ($users as $userData) {
            User::create($userData);
        }


        RoleUser::create([
            'role_id'=> '1',
            'permission_id'=> '1',
            'user_id'=> '1'
        ]);
       
        $this->call([
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
