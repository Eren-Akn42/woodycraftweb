<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            ['id' => 1, 'categorie_id' => 1, 'name' => "Produit 1", 'description' => "Description 1", 'image' => "image1.webp", 'price' => 1.99, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 2, 'categorie_id' => 2, 'name' => "Produit 2", 'description' => "Description 2", 'image' => "image1.webp", 'price' => 2.99, 'created_at' => NULL, 'updated_at' => NULL],
            ['id' => 3, 'categorie_id' => 3, 'name' => "Produit 3", 'description' => "Description 3", 'image' => "image1.webp", 'price' => 3.99, 'created_at' => NULL, 'updated_at' => NULL],
        ]);
    }
}
