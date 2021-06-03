<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        
        User::create([
            'email' => 'admin@admin.com',
            'name' => 'admin1',
            'password' => Hash::make('test'),
            'role' => 'ADMIN',
            'level' => 'level 1'
        ]);
        User::create([
            'email' => 'admin2@admin2.com',
            'name' => 'admin2',
            'password' => Hash::make('test'),
            'role' => 'ADMIN',
            'level' => 'level 1'
        ]);
        
    }
}
