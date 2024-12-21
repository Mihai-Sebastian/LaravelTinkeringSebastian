<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelicules = Pelicula::all();
        return view('pelicules.index', compact('pelicules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelicules.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->titol = $request->titol;
        $pelicula->descripcio = $request->descripcio;
        $pelicula->genere = $request->genere;
        $pelicula->any = $request->any;
        $pelicula->puntuacio = $request->puntuacio;
        $pelicula->save();
        return redirect()->route('pelicules.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('pelicules.show', compact('pelicula'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        return view('pelicules.edit', compact('pelicula'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->titol = $request->titol;
        $pelicula->descripcio = $request->descripcio;
        $pelicula->genere = $request->genere;
        $pelicula->any = $request->any;
        $pelicula->puntuacio = $request->puntuacio;
        $pelicula->save();
        return redirect()->route('pelicules.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::find($id);

        if ($pelicula) {
            $pelicula->delete();
            return redirect()->route('pelicules.index')->with('success', 'Pel·lícula eliminada correctament!');
        }

        return redirect()->route('pelicules.index')->with('error', 'Pel·lícula no trobada!');
    }
}
