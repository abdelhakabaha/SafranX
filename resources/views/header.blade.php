<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Home Page</title>
	<link  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('css/z.css') }}"   type="text/css" media="all" />
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#"><span class="text-warning">Safran</span>X</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					
					{{-- <div class="input-group rounded">
						<input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
						<span class="input-group-text border-0" id="search-addon">
						  <i class="fas fa-search"></i>
						</span>
					  </div> --}}


                  {{-- //forme de recherche  --}}
				  @if (request()->is('/'))
				  <form action="{{ route('article.search') }}" method="GET">
					<input type="text" name="search" placeholder="Rechercher par titre">
					<button type="submit">Rechercher</button>
					</form>
  				@elseif (request()->is('/productPage'))
				  <form action="{{ route('produits.search') }}" method="GET">
					<input type="text" name="searchProduit" placeholder="Rechercher par name">
					<button type="submit">Rechercher</button>
				  </form>
				  @endif
					
					<li class="nav-item">
						<a class="nav-link" href="{{ route('home') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('productPage') }}">Produit</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('auth.login') }}">login</a>
					</li>
					@isset($items)
						
					{{ $items }}
					<a href="{{ route('panier') }}" class="text-yellow-400 hover:text-gray-100 mx-2" src=>
						<img width="86"   height="86"src="https://doeremilavender.com/wp-content/uploads/2019/06/5a385f7f981196.8903932415136439036229.png"></i>
						  </a>
					@else
					<a href="{{ route('panier') }}" class="text-yellow-400 hover:text-gray-100 mx-2" src=>
						<img width="86"   height="86"src="https://doeremilavender.com/wp-content/uploads/2019/06/5a385f7f981196.8903932415136439036229.png"></i>
						  </a>
					@endif

				</ul>
			</div>
		</div>
	</nav>