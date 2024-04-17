<?php

namespace App\Http\Controllers;

use App\Models\Articl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articls = Articl::all(); // Récupérer tous les articles
        return view('dashboard.ArticleDachbord', compact('articls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layoute.creeArticle'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
  
           // Validation des données du formulaire
                $articleData = $request->validate([
                    'title' => 'required|max:255',
                    'description' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                    // Taille maximale de l'image : 2 Mo
                ]);
        
                // Enregistrement de l'image
                $imagePath = $request->file('image')->store('article_images', 'public');
        
                // Création du nouvel article
                Articl::create([
                    "titre" => $articleData["title"],
                    "description" => $articleData["description"],
                    "image" => $imagePath,
                    "user_id" => $request->user()->id,
                ]);
        
                return redirect()->route('layoute.creeArticle')->with('success', 'Article created successfully!');
            }
        
    /**
     * Display the specified resource.
     */
    public function show(Articl $articl)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */


    // Méthode pour afficher le formulaire de modification
    public function edit()
    {
        $article = Articl::findOrFail(2); // Récupère l'article par son ID
        return view('layoute.updateArticle', compact('article'));
    }

    //Méthode pour mettre à jour l'article dans la base de données
    public function update(Request $request )
    {
        // dd($request);
        $article = Articl::findOrFail(2); // Récupère l'article par son ID

        // Validation des données du formulaire
        $articleData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        // Mise à jour des données de l'article
        $article->titre = $articleData['title'];
        $article->description = $articleData['description'];

        // Vérification si une nouvelle image est téléchargée
        if ($request->hasFile('image')) {
            // Enregistrement de la nouvelle image
            $imagePath = $request->file('image')->store('article_images', 'public');
            // Supprimer l'ancienne image si elle existe
            if ($article->image) {
                Storage::disk('public')->delete($article->image);
            }
            $article->image = $imagePath;
        }

        // Sauvegarde des modifications de l'article
        $article->save();

        // Redirection avec message de succès
        return redirect()->route('home')->with('success', 'Article updated successfully!');
    }






    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Articl $articl)
    {
        //
    }
}
