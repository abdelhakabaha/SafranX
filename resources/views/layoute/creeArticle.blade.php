@include('headerForme') 

<body class="bg-gray-100 p-4 style ')] background-image">
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


