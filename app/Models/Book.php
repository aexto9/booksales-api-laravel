<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    private $books = [
        [
            'title' => 'Pulang',
            'description' => 'Pertualangan seroang pemuda',
            'price' => 40000,
            'stock' => 15,
            'cover' => 'pulang.png',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Sebuah Senin Untuk Berisik',
            'description' => 'Keihdupan dan filosofi',
            'price' => 25000,
            'stock' => 5,
            'cover' => 'sebuah_seni.png',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'Naruto',
            'description' => 'Tentang jalan ninja',
            'price' => 30000,
            'stock' => 25,
            'cover' => 'naruto.png',
            'genre_id' => 3,
            'author_id' => 3
        ]
    ];

    public function getBooks() {
        return $this->books;
    }

}
