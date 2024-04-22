<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->
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
					<li class="nav-item">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#services">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#portfolio">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href=" {{ route('auth.login' )}}">Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>

		{{-- les image qui afiche sur le home page avec leur contenu  --}}
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100  " src="{{ asset('https://www.notizienazionali.it/archivi/immagini/2016/Z/zafferano-spezia.jpg') }} ">
				<div class="carousel-caption">
					<h5>L'épice des rois</h5>
					<p>La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('https://www.tohumu.com.tr/wp-content/uploads/2022/10/Safran-Tohumu-780x470.jpg') }}">
				<div class="carousel-caption">
					<h5>L'épice des rois</h5>
					<p>"La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('https://th.bing.com/th/id/OIP.Q-ZARiRUw2ZaUZ4RsVfzOgEsC9?pid=ImgDet&w=178&h=112&c=7&dpr=1.5') }}">
				<div class="carousel-caption">
					<h5>True Construction</h5>
					<p>"La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('https://i.pinimg.com/564x/1d/48/a4/1d48a45627fe0702c5b056a5cdd046ad.jpg') }}">
				<div class="carousel-caption">
					<h5>True Construction</h5>
					<p>"La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>


		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><!-- about section starts -->
	<section class="about section-padding" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12 col-12">
					<div class="about-img"><img alt="" class="img-fluid" src="{{ asset('https://th.bing.com/th/id/OIP.xFrvf7tnXXJpIVwq1BvLoQHaDz?w=285&h=179&c=7&r=0&o=5&dpr=1.5&pid=1.7') }}"></div>
				</div>
				<div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
					<div class="about-text">
						<h2>Le Safran l'or </h2>
						<p>
							Le safran de Taliouine est réputé comme l'un des meilleurs au monde, tant pour sa qualité que pour son histoire. Taliouine, situé dans les montagnes de l'Anti-Atlas au Maroc, offre des conditions idéales pour la culture du safran. Cette précieuse épice est extraite des stigmates de la fleur de crocus sativus, une plante délicate qui nécessite une attention méticuleuse.
							
							La culture du safran à Taliouine est profondément enracinée dans la tradition locale, transmise de génération en génération. Les agriculteurs de la région consacrent une grande partie de leur temps et de leur énergie à cultiver et à récolter ce trésor rouge orangé. Les méthodes de culture sont souvent traditionnelles, avec une cueillette à la main des fleurs pendant la courte période de floraison à l'automne.</p><a class="btn btn-warning" href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- about section Ends -->
	<!-- services section Starts -->
	<section class="services section-padding" id="services">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Services</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
						adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-laptop"></i>
							<h3 class="card-title">Best Quality</h3>
							<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-journal"></i>
							<h3 class="card-title">Sustainability</h3>
							<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-12 col-lg-4">
					<div class="card text-white text-center bg-dark pb-2">
						<div class="card-body">
							<i class="bi bi-intersect"></i>
							<h3 class="card-title">Integrity</h3>
							<p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci eligendi modi temporibus alias iste. Accusantium?</p><button class="btn bg-warning text-dark">Read More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- services section Ends -->
	<!-- portfolio strats -->
	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Projects</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
						adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>

			{{-- la partie pour aficher les article sur le home page  --}}
			<div class="row">
				@foreach ($articls as $articl )
				<div class="col-12 col-md-12 col-lg-4 mb-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img height="200px" width="300px" alt="" class="" src="{{ asset('storage/'.$articl->image)}}"></div>
							<h3 class="card-title">{{ "$articl->titre" }}</h3>
							<p class="lead text-truncate">{{ "$articl->description" }}</p>
							<a href="{{ route('articleDetaille',$articl->id) }}" ><button class="btn bg-warning text-dark">Learn More</button></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		
	</section><!-- portfolio ends -->
	<!-- team starts -->
	<section class="team section-padding" id="team">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Our Team</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
						adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-1.jpg') }}">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-2.jpg') }}">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-3.jpg') }}">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-6 col-lg-3">
					<div class="card text-center">
						<div class="card-body">
							<img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-4.jpg') }}">
							<h3 class="card-title py-2">Jack Wilson</h3>
							<p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam nostrum illo tempora esse quibusdam.</p>
							<p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i> <i class="bi bi-instagram text-dark mx-1"></i></p>
						</div>
					</div>
				</div>
			</div>
		</div>



		
	</section><!-- team ends -->
	<!-- Contact starts -->
	{{-- <section class="contact section-padding" id="contact">
		<div class="container mt-5 mb-5">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Contact Us</h2>
						<p>Lorem ipsum dolor sit amet, consectetur<br>
						adipisicing elit. Non, quo.</p>
					</div>
				</div>
			</div>
			<div class="row m-0">
				<div class="col-md-12 p-0 pt-4 pb-4">
					<!--for getting the form download the code from download button-->
				</div>
			</div>
		</div>
	</section><!-- contact ends --> --}}
	<!-- footer starts -->


	<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'affichage de produits</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  <header class="container-fluid bg-dark text-white">
    <div class="row">
      <div class="col-md-12">
        <h1>My Clothing Store</h1>
      </div>
    </div>
  </header>

  <main class="container py-5">
    <div class="row">
      <div class="col-md-6">
        <img src="image-produit.jpg" alt="Image du produit" class="img-fluid">
      </div>
      <div class="col-md-6">
        <h2>Nom du produit</h2>
        <p>Description du produit</p>
        <div class="d-flex justify-content-between">
          <p class="text-muted">Prix: 40€</p>
          <button type="button" class="btn btn-primary">Ajouter au panier</button>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-12">
        <h3>Caractéristiques du produit</h3>
        <ul>
          <li>Caractéristique 1</li>
          <li>Caractéristique 2</li>
          <li>Caractéristique 3</li>
        </ul>
      </div>
    </div>
  </main>

  <footer class="container-fluid bg-dark text-white py-3">
    <div class="row">
      <div class="col-md-12">
        <p>&copy; 2024 My Clothing Store</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @website Name</p>
		</div>
	</footer>	
	<!-- footer ends -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
