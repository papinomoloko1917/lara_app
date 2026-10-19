<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = fake()->words(1000);

        foreach ($names as $name) {
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
