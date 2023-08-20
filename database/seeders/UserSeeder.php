<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'nama'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'role'=> 'super_admin',
            'password'=>Hash::make('superadmin'),
        ]);
    }
}
