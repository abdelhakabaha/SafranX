<?php

namespace App\Http\Controllers;

use App\Models\commande;
use App\Models\Produits;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function confirmOrder()
    {
        // Confirmer la commande et enregistrer les détails dans la base de données
    }
    public function index()
    {
        $items = commande::where('user_id', auth()->id())->where('isValid', false)->with('produit')->get();
        // dd($items);
        return view('panier', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Produits $product)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( $id)
    {
        $command = commande::where('produits', $id)->where('user_id', auth()->id())->where('isValid', false)->first();
        if($command){
            $command->update([
                'quantite' => $command->quantite+1,
            ]);
        }else{
            commande::create(
                [
                    'produits' => $id,
                    'user_id' => auth()->id(),
                ]
            );
        }
        return redirect()->back()->with('success', 'Product deleted successfully!'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(commande $commande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(commande $commande)
    {
        //
    }
}
