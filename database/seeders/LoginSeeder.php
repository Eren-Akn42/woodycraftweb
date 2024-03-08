<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('logins')->insert([
            ['id' => '1', 'customer_id' => '1', 'username' => 'Hamidou', 'password' => Hash::make('password1'), 'created_at' => $now, 'updated_at' => $now],
            ['id' => '2', 'customer_id' => '2', 'username' => 'Delaroche', 'password' => Hash::make('password2'), 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
