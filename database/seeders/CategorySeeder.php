<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Musique', 'description' => 'Description pour la catégorie musique', 'image' => 'musicDrum.png', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Véhicule', 'description' => 'Description pour la catégorie véhicule', 'image' => 'truck.png', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Steampunk', 'description' => 'Description pour la catégorie Steampunk', 'image' => 'steampunkSpaceShip.png', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
