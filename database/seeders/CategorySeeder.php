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
            'Машины',
            'Гаджеты',
            'Наука',
        ];

        foreach ($names as $name) {
            Category::create([
                'name' => $name,
            ]);
        }
    }
}
