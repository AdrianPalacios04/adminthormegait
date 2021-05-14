<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'=>'admin',
            'lastname'=>'palacios',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'role'=>'admin'
        ]);
    }
}