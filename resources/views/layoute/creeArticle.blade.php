<!-- resources/views/layoute/creeArticle.blade.php -->

{{-- <h1>Crée une nouvel article</h1>


    <div class="container">
        <h1>Create New Article</h1>

        

        <form method="POST" action="{{ route('layoute.creeArticle') }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div> --}}



    
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de création de produit</title>
    <!-- Ajoutez le lien vers le CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Ajoutez votre propre style pour définir l'image de fond */
        .background-image {
            background-image: url('https://images.unsplash.com/photo-1631189944771-466264f05965?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTR8fHNhZnJhbnxlbnwwfHwwfHx8MA%3D%3D');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<style></style>
<body class="bg-gray-100 p-4 style " >
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Création d'un nouveau Article</h1>
        <form method="POST" action="{{ route('layoute.creeArticle') }}" enctype="multipart/form-data">
            {{-- @method('POST') --}}
            @csrf
            <div class="mb-4">
                <label for="titre" class="block text-sm font-medium text-gray-700">titre</label>
                <input type="text" id="titre" name="titre" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Créer Artecle</button>
        </form>
    </div>
</body>
</html>


