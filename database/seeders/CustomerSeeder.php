<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('customers')->insert([
            ['id' => 1, 'forename' => 'Sarah', 'surname' => 'Hamida', 'add1' => 'ligne add1', 'add2' => 'ligne add2', 'add3' => 'Meximieux', 'postcode' => '01800', 'phone' => '0612345678', 'email' => 's.hamida@gmail.com', 'registered' => 1],
            ['id' => 2, 'forename' => 'Jean-Benoît', 'surname' => 'Delaroche', 'add1' => 'ligne add1', 'add2' => 'ligne add2', 'add3' => 'Lyon', 'postcode' => '69009', 'phone' => '0796321458', 'email' => 'jb.delaroche@gmx.fr', 'registered' => 1],
        ]);
    }
}
