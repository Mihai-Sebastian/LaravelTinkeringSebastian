<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';

    protected $fillable = [
        'titol',
        'genere',
        'any',
        'descripcio',
        'puntuacio',
        'temporades',
        'episodis',
        'creadors',
        'sinopsis',
    ];
}
