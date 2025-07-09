<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    // Lister tous les produits (vue HTML)
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('produits.create');
    }

    // Créer un nouveau produit (depuis formulaire)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'quantite' => 'required|integer',
        ]);
        Produit::create($validated);
        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès!');
    }
}
