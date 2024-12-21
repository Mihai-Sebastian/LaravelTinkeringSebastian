<?php

namespace Database\Seeders;

use App\Models\Pelicula;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelicula::create([
            'titol' => 'Inception',
            'descripcio' => 'Un lladre que roba secrets corporatius mitjançant la tecnologia de somnis compartits rep la tasca d’implantar una idea en la ment d’un CEO.',
            'genere' => 'Ciència-ficció',
            'any' => 2010,
            'puntuacio' => 8.8,
        ]);
        Pelicula::create([
            'titol' => 'Pulp Fiction',
            'descripcio' => 'Les vides de dos assassins a sou, un boxejador, la dona d’un gàngster i dos lladres de cafeteria s’entrellacen en una sèrie d’aventures criminals.',
            'genere' => 'Crim',
            'any' => 1994,
            'puntuacio' => 8.9,
        ]);

        Pelicula::create([
            'titol' => 'Matrix',
            'descripcio' => 'Un hacker descobreix la veritat sobre la seva realitat i el seu paper en una guerra contra els controladors d’aquesta.',
            'genere' => 'Acció',
            'any' => 1999,
            'puntuacio' => 8.7,
        ]);
    }
}
