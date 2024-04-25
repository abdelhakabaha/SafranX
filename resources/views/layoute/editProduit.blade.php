@include('headerForme')     

<body class="bg-gray-100 p-4 style ')] background-image">
{{-- <body class="bg-gray-100 p-4 style ')]" > --}}
    <div class="max-w-md mx-auto bg-white p-8 rounded-md shadow-md">
        <h1 class="text-2xl font-bold mb-6">Création d'un nouveau produit</h1>
        <form method="POST" action="{{ route('layoute.updateproduit',$produits->id) }}" enctype="multipart/form-data">
            {{-- @method('POST') --}}
            @method("PUT")
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ "$produits->name" }}</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-700">
                    {{ "$produits->description" }}</label>
                <textarea id="description" name="description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required></textarea>
            </div>

            
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">{{ "$produits->prix "}}</label>
                <input type="number" id="price" name="prix" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-medium text-gray-700">{{ "$produits->stock "}}</label>
                <input type="number" id="price" name="stock" step="0.01" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">{{ "$produits->type" }}</label>
                <input type="text" id="name" name="type" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                <input type="file" id="image" name="image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500" required>
            </div>
            <button type="submit" class="w-full px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Modifier le produit</button>
        </form>
    </div>
</body>
</html>
