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
            // Taille maximale de l'image : 2 Mo
        ]);

        // Création du nouvel article
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
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
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
