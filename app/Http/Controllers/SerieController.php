<?php

namespace App\Http\Controllers;

use App\Models\Serie; // Assegura't que utilitzis el model 'Serie'
use Illuminate\Http\Request;

class SerieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $series = Serie::all(); // Canviem Pelicula a Serie
        return view('series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar les dades d'entrada
        $request->validate([
            'titol' => 'required|string|max:255',
            'genere' => 'required|string|max:255',
            'any' => 'required|integer|min:1900|max:2024',
            'descripcio' => 'required|string',
            'puntuacio' => 'required|numeric|min:0|max:10',
            'temporades' => 'required|integer|min:1',
            'episodis' => 'required|integer|min:1',
            'creadors' => 'nullable|string|max:255',
            'sinopsis' => 'nullable|string',
        ]);

        // Crear la nova sèrie
        $serie = new Serie();
        $serie->titol = $request->titol;
        $serie->genere = $request->genere;
        $serie->any = $request->any;
        $serie->descripcio = $request->descripcio;
        $serie->puntuacio = $request->puntuacio;
        $serie->temporades = $request->temporades;
        $serie->episodis = $request->episodis;
        $serie->creadors = $request->creadors;
        $serie->sinopsis = $request->sinopsis;
        $serie->save();

        return redirect()->route('series.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Recuperem la sèrie per ID
        $serie = Serie::findOrFail($id);
        return view('series.show', compact('serie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Recuperem la sèrie per ID per a l'edició
        $serie = Serie::findOrFail($id);
        return view('series.edit', compact('serie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validar les dades d'entrada
        $request->validate([
            'titol' => 'required|string|max:255',
            'genere' => 'required|string|max:255',
            'any' => 'required|integer|min:1900|max:2024',
            'descripcio' => 'required|string',
            'puntuacio' => 'required|numeric|min:0|max:10',
            'temporades' => 'required|integer|min:1',
            'episodis' => 'required|integer|min:1',
            'creadors' => 'nullable|string|max:255',
            'sinopsis' => 'nullable|string',
        ]);

        // Recuperem la sèrie per ID
        $serie = Serie::findOrFail($id);
        $serie->titol = $request->titol;
        $serie->genere = $request->genere;
        $serie->any = $request->any;
        $serie->descripcio = $request->descripcio;
        $serie->puntuacio = $request->puntuacio;
        $serie->temporades = $request->temporades;
        $serie->episodis = $request->episodis;
        $serie->creadors = $request->creadors;
        $serie->sinopsis = $request->sinopsis;
        $serie->save();

        return redirect()->route('series.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Recuperem la sèrie per ID
        $serie = Serie::find($id);

        if ($serie) {
            $serie->delete();
            return redirect()->route('series.index')->with('success', 'Sèrie eliminada correctament!');
        }

        return redirect()->route('series.index')->with('error', 'Sèrie no trobada!');
    }
}

