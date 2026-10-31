<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(5)->user()->create();

        User::factory(1)->admin()->create([
            'name' => 'Max',
            'email' => 'ip_varivoda@mail.ru',
            'password' => Hash::make('password'),
        ]);
    }
}
