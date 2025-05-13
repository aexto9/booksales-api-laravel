<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['id' => 1, 'name' => 'Fiksi'],
        ['id' => 2, 'name' => 'Non-Fiksi'],
        ['id' => 3, 'name' => 'Fantasi'],
        ['id' => 4, 'name' => 'Biografi'],
        ['id' => 5, 'name' => 'Sejarah'],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
