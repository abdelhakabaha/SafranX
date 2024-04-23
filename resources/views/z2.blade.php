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
						<a class="nav-link" href="#portfolio">Produit</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('register') }}">register</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('auth.login') }}">login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>




		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div><!-- about section starts -->

	<!-- services section Starts -->



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

				{{-- {{ asset('storage/'.$produits->image)}} --}}
					
				{{-- {{ route('articleDetaille',$produits->id) }}	 --}}
			{{-- la partie pour aficher les article sur le home page  --}}
			<div class="row">
			@foreach ($produits as $produit  )
				<div class="col-12 col-md-12 col-lg-4 mb-4">
					<div class="card text-light text-center bg-white pb-2">
						<div class="card-body text-dark">
							<div class="img-area mb-4"><img height="200px" width="300px" alt="" class="" src="https://th.bing.com/th/id/OIP.d_V3FV4rbkBhgJlyCyc6TQHaJ4?w=211&h=180&c=7&r=0&o=5&dpr=1.5&pid=1.7"></div>
							<h3 class="card-title">{{ "$produit->titre" }}</h3>
							<p class="lead text-truncate">{{ "$produit->description" }}</p>
							<a href="route" ><button class="btn bg-warning text-dark">Learn More</button></a>
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
