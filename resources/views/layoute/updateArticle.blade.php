<!-- resources/views/layoute/creeArticle.blade.php -->

        <form method="POST" action="{{ route('layoute.update',$article->id) }}" enctype="multipart/form-data">
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
        </form>


