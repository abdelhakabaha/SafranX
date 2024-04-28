<h1> le panier des produit choisier</h1>
@foreach ($items as $item)

{{ $item->produit->name }}
    
@endforeach