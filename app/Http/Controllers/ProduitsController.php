<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\Produits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produits::all(); // Récupérer tous les produit 
        return view('dashboard.produitDachbord', compact('produits'));
    }

    public function produitsHome()
    {
        $produits = Produits::all(); 
        $items = commande::where('user_id', auth()->id())->where('isValid', false)->count();
        return view('productPage', compact('produits', 'items'));
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
                    $imagePath = $request->file('image')->store('produit_images', 'public');
            
                    // Création du nouvel produit 
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
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produits= Produits::findOrFail($id);
        // dd($produits);
        return view('layoute.editProduit', compact('produits'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $produit = Produits::findOrFail($id); 
         //dd($request);
        //dd($produit);
        $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'prix' => 'required',
            'stock' => 'required',
            'type' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Update product data
        $produit->name = $request->input('name');
        $produit->description = $request->input('description');
        $produit->prix = $request->input('prix');
        $produit->stock = $request->input('stock');
        $produit->type = $request->input('type');

 // Check if a new image is uploaded
 if ($request->hasFile('Image')) {
    // Save the new image
    $imagePath = $request->file('Image')->store('produit_images', 'public');
    // Delete the old image if it exists
    if ($produit->image) {
        Storage::disk('public')->delete($produit->image);
    }
    $produit->image = $imagePath;

}


// Save the updated product
$produit->save();
//dd($produit->save());
// Redirect with success message
return redirect()->route('dashboard.produitDachbord')->with('success', 'Product updated successfully!');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produit = Produits::findOrFail($id);
        $produit->delete();

        return redirect()->back()->with('success', 'Product deleted successfully!'); 
    }
    public function searchProduits(Request $request)
    {
        $searchProduits = $request->input('searchProduit');

        $produits = Produits::where('name', 'like', '%' . $searchProduits . '%')->get();

// dd($produits);
        return view('productPage', compact('produits'));
    }

    
}


