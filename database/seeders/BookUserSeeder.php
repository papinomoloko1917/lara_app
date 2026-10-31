<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Seeder;

class BookUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        foreach ($users as $user) {
            $bookIds = Book::inRandomOrder()
                ->limit(3)
                ->pluck('id');

            $user->books()->attach($bookIds);
        }
    }
}
