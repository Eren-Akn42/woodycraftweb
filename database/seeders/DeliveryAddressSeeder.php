<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeliveryAddressSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('delivery_addresses')->insert([
            ['id' => 46, 'firstname' => 'Christian', 'lastname' => 'Hamida', 'add1' => '15 Rue de la paix', 'add2' => '', 'city' => 'Saint Etienne', 'postcode' => '42000', 'phone' => '0477213145', 'email' => 'chr.hamida@gmail.com'],
            ['id' => 47, 'firstname' => 'Sarah', 'lastname' => 'Hamida', 'add1' => 'ligne add1', 'add2' => 'ligne add2', 'city' => 'Meximieux', 'postcode' => '01800', 'phone' => '0612345678', 'email' => 's.hamida@gmail.com'],
        ]);
    }
}
