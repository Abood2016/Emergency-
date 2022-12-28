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
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'username' => 'Noura',
            'email' => 'noura@email.com',
            'password' => Hash::make('123456'),
            'role' => 'employee',
            'phone' => '+96685789585',
        ]);
    }
}
