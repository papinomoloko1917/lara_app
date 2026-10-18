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
        $names = [
            'Автомобили',
            'Наука',
            'Спорт',
        ];

        foreach ($names as $name) {
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
