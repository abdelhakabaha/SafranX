<!-- resources/views/layoute/creeArticle.blade.php -->

        {{-- <form method="POST" action="{{ route('layoute.update',$article->id) }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-group">
                <label for="title">titre</label>
                <input  value="{{ "$article->titre" }}" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="title">description</label>
                <input  value="{{ $article->description }}" class="form-control" id="title" name="description">
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">{{ "$article->image" }}</label>
                <input type="file" id="image" name="Image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
        </form> --}}
        <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de modification de produit</title>
    <!-- Ajoutez le lien vers le CDN de Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<style></style>
<body class="bg-gray-100 p-4 style " >
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Création d'un nouveau Article</h1>
        <form method="POST" action="{{ route('layoute.update',$article->id) }}" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="mb-4">
                <label for="titre" class="block text-sm font-medium text-gray-700">titre</label>
                <input type="text" id="titre" name="titre" value="{{ "$article->titre" }}" 
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" rows="3"value="{{ $article->description }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
            </div>

            {{-- <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700"></label>
                <input value="{{ "$article->image" }}" type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div> --}}

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">{{ "$article->image" }}</label>
                <input type="file" id="image" name="Image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>

            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Modifier Artecle</button>
        </form>
    </div>
</body>
</html>


