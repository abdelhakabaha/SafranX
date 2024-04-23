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

    public function produitsHome()
    {
        $produits = Produits::all(); // Récupérer tous les produits
        return view('z2', compact('produits'));
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
            //  dd($request);
               // Validation des données du formulaire
                    $produitsData = $request->validate([
                        'name' => 'required|max:255',
                        'description' => 'required',
                        'prix' => 'required',
                        'type' => 'required',
                        'stock' => 'required',
                        'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

                        // Taille maximale de l'image : 2 Mo
                    ]);
    



                    
               // Enregistrement de l'image
                    $imagePath = $request->file('image')->store('article_images', 'public');
            
                    // Création du nouvel article
                    produits::create([
                        "name"=> $produitsData["name"],
                        "description" => $produitsData["description"],
                        "prix"=> $produitsData["prix"],
                        "type"=> $produitsData["type"],
                        "stock"=> $produitsData["stock"],
                        "user_id"=> Auth()->id(),
                        "categorie_id"=> 4,
                        "image" => $imagePath,

                        // "titre" => $produitsData["titre"],
                        // "description" => $produitsData["description"],
                        // "image" => $imagePath,
                        // "user_id" => $request->user()->id,
                    ]);
            
                    return redirect()->route('dashboard.produitDachbord')->with('success', 'produits created successfully!');
                
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


