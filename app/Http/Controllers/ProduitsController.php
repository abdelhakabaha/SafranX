<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produits::all(); // Récupérer tous les articles
        return view('dashboard.produitDachbord', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layoute.creeProduit'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Produits::findOrFail($id);
        $article->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!'); 
    }
}
