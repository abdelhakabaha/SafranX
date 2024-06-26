@include('headerForme') 
<body class="bg-gray-100 p-4 style ')] background-image">
{{-- <body class="bg-gray-100 p-4"> --}}
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Création d'un nouveau Categories</h1>
        <form action="{{ route('layoute.creeCategory') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom du catégories</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Créer le Catégories</button>
        </form>
    </div>
</body>
</html>