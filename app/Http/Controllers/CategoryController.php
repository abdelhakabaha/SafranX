<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Categorys = Category::all(); // Récupérer tous les Categories
        return view('dashboard.CategoryDachbord', compact('Categorys'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layoute.creeCategory'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user=Auth::user();

        
          // Validation des données du formulaire
           $categoryData = $request->validate([
            'name' => 'required|max:255',
        ]);

        // Création du nouvel catégories
        Category::create([
            "name" => $categoryData["name"],
            "user_id" => $user->id,
        ]);

        return redirect()->route('dashboard.CategoryDachbord')->with('success', 'category created successfully!');
    }
    





    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = category::findOrFail($id); // Récupère le catégorie par son ID
        return view('layoute.updateArticle', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $category = Category::findOrFail($id); // Récupère le catégorie par son ID

        // Validation des données du formulaire
        $categoryData = $request->validate([
            'name' => 'required|max:255',
        ]);
        // Mise à jour des données des catégories
        $category->titre = $categoryData['name'];
        // Sauvegarde des modifications des catégories 
        $category->save();
        // Redirection avec message de succès
        return redirect()->route('home')->with('success', 'category updated successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Category = Category::findOrFail($id);
        $Category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully!');
    
    }
}
