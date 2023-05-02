<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 's admin',
                'email' => 'superadmin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'superadmin',
                'password' => bcrypt('admin'), //admin
                'remember_token' => Str::random(10),
            ],
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'role' => 'admin',
                'password' => bcrypt('admin'), //admin
                'remember_token' => Str::random(10),
            ],
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}