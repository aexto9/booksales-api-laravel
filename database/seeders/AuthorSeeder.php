<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::insert([
            ['name' => 'Tere Liye'],
            ['name' => 'Mark Manson'],
            ['name' => 'Masashi Kishimoto'],
            ['name' => 'Andrea Hirata'],
            ['name' => 'Dewi Lestari'],
        ]);
    }
}
