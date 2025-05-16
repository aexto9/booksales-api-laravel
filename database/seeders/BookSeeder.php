<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Pulang',
                'description' => 'Petualangan seorang pemuda mencari jati diri.',
                'price' => 40000,
                'stock' => 15,
                'author_id' => 1
            ],
            [
                'title' => 'Sebuah Seni Untuk Bersikap Bodo Amat',
                'description' => 'Tentang filosofi hidup modern.',
                'price' => 25000,
                'stock' => 10,
                'author_id' => 2
            ],
            [
                'title' => 'Naruto',
                'description' => 'Kisah ninja Uzumaki Naruto.',
                'price' => 30000,
                'stock' => 20,
                'author_id' => 3
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Perjuangan anak-anak Belitong.',
                'price' => 35000,
                'stock' => 12,
                'author_id' => 4
            ],
            [
                'title' => 'Supernova',
                'description' => 'Gabungan fiksi ilmiah dan spiritualitas.',
                'price' => 45000,
                'stock' => 8,
                'author_id' => 5
            ]
        ]);
    }
}

