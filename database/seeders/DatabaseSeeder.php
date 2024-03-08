<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorieTableSeeder::class,
            CustomerTableSeeder::class,
            DeliveryAddressTableSeeder::class,
            LoginTableSeeder::class,
            OrderItemTableSeeder::class,
            OrderTableSeeder::class,
            ProductTableSeeder::class,
        ]);
    }
}
