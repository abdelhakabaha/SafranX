@include('header')
	<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
		<div class="carousel-indicators">
			<button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
		</div>
		{{-- les image qui afiche sur le home page avec leur contenu  --}}
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img alt="..." class="d-block w-100 h-10" src="{{ asset('https://www.notizienazionali.it/archivi/immagini/2016/Z/zafferano-spezia.jpg') }} ">
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
					<h5>L'épice des rois</h5>
					<p>"La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
			<div class="carousel-item">
				<img alt="..." class="d-block w-100" src="{{ asset('https://i.pinimg.com/564x/1d/48/a4/1d48a45627fe0702c5b056a5cdd046ad.jpg') }}">
				<div class="carousel-caption">
					<h5>L'épice des rois</h5>
					<p>"La richesse de la terre et le savoir-faire ancestral se rencontrent dans le safran de Taliouine, une véritable œuvre d'art culinaire.</p>
					<p><a class="btn btn-warning mt-3" href="#">Learn More</a></p>
				</div>
			</div>
		</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
	</div>

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
	</section>
            
	<section class="portfolio section-padding" id="portfolio">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header text-center pb-5">
						<h2>Épices d'Or: À la Découverte du Monde du Safran</h2>
						<p>Plongez dans un monde d'épices envoûtant avec notre site dédié au safran. Explorez la culture, les secrets de sa culture et ses utilisations variées à travers des articles captivants. Laissez-vous inspirer par la richesse et la diversité de cette précieuse épice aux multiples facettes</p>
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
	</section>
	

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



		
	</section>


  <footer class="container-fluid bg-dark text-white py-3">
    <div class="row">
      <div class="col-md-12">
        <p>&copy; 2024 My Clothing Store</p>
      </div>
    </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



{{-- --------------------------------------- --}}



{{-- ----------------------------------------- --}}


	<footer class="bg-dark p-2 text-center">
		<div class="container">
			<p class="text-white">All Right Reserved By @website Name</p>
		</div>
	</footer>	
	<!-- footer ends -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
