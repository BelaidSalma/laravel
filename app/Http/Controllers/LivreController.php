<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livres = Livre::all(); // Notez l'utilisation du pluriel pour indiquer une collection
        return view('livre.index', compact('livres')); // Passez la collection sous un nom cohérent
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livre.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Livre::create($request->all());
        return redirect()->route('livre.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livre = Livre::find($id);
        return view('livre.show', compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $livre = Livre::find($id); // Récupère le livre à éditer
        return view('livre.edit', compact('livre')); // Passe l'instance du livre à la vue
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       
    }
}
