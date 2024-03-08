<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orders')->insert([
            ['customer_id' => 1, 'registered' => 1, 'delivery_add_id' => 47, 'payment_type' => 'cheque', 'date' => '2020-01-23', 'status' => 10, 'session' => 'da8bcdf51121d96c71673295b825a010', 'total' => 86.2],
        ]);
    }
}
