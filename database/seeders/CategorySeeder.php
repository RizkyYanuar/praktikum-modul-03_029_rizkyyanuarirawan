<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::truncate();

        Category::create(['id' => 1, 'name' => 'Workshop & Pelatihan', 'slug' => 'workshop-pelatihan']);
        Category::create(['id' => 2, 'name' => 'Acara Akademik', 'slug' => 'acara-akademik']);
        Category::create(['id' => 3, 'name' => 'Kompetisi', 'slug' => 'kompetisi']);
    }
}
