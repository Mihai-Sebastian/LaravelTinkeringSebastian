<?php

namespace Database\Seeders;

use App\Models\Serie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Afegim algunes sèries d'exemple
        Serie::create([
            'titol' => 'Juego de Tronos',
            'genere' => 'Fantasia',
            'any' => 2011,
            'descripcio' => 'Una sèrie de drama fantàstic amb múltiples famílies nobles lluitant pel control del Trono de Ferro.',
            'puntuacio' => 9.3,
            'temporades' => 8,
            'episodis' => 73,
            'creadors' => 'David Benioff, D.B. Weiss',
            'sinopsis' => 'Les lluites de poder entre famílies reials per al control d’una terra dividida coneguda com Westeros.',
        ]);

        Serie::create([
            'titol' => 'Stranger Things',
            'genere' => 'Ciència ficció, Misteri',
            'any' => 2016,
            'descripcio' => 'Un grup d’amics lluita per resoldre la desaparició d’un nen i els misteris que envolten una petita ciutat dels Estats Units.',
            'puntuacio' => 8.7,
            'temporades' => 4,
            'episodis' => 34,
            'creadors' => 'The Duffer Brothers',
            'sinopsis' => 'Un grup d’amics es veu immers en un món de misteri i éssers sobrenaturals en la petita ciutat de Hawkins, Indiana.',
        ]);

        Serie::create([
            'titol' => 'The Mandalorian',
            'genere' => 'Acció, Aventura, Ciència ficció',
            'any' => 2019,
            'descripcio' => 'Un caçador de recompenses solitari viatja a través de la galàxia després de la caiguda de l’Imperi.',
            'puntuacio' => 8.8,
            'temporades' => 3,
            'episodis' => 24,
            'creadors' => 'Jon Favreau',
            'sinopsis' => 'Després de l’Imperi, un caçador de recompenses solitari en busca d’un misteriós nen travessa una galàxia llunyana.',
        ]);
    }
}

