<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderItemSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('orderitems')->insert([
            ['order_id' => 63, 'product_id' => 14, 'quantity' => 1],
        ]);
    }
}
