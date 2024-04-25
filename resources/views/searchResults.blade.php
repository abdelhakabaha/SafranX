<!-- resources/views/search-results.blade.php -->

@foreach ($articls as $articl)
    <div>
        <h2>{{ $articl->title }}</h2>
        <p>{{ $articl->description }}</p>
        <p>{{ $articl->image}}</p>
        <div class="img-area mb-4"><img height="200px" width="300px" alt="" class="" 
            src="{{ asset('storage/'.$articl->image)}}"></div>
        <h1>les détaille de l'article </h1>
    </div>
@endforeach
