<!-- resources/views/layoute/creeArticle.blade.php -->

<h1>la modification des article</h1>


    <div class="container">
        <h1>modifier l'article</h1>

        

        <form method="POST" action="{{ route('layoute.update') }}" enctype="multipart/form-data">
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
            {{-- <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date">
            </div> --}}
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
