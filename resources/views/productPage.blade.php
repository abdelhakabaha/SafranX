@include('header')
<div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
    <div class="carousel-indicators">
        <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators"
            type="button"></button> <button aria-label="Slide 2" data-bs-slide-to="1"
            data-bs-target="#carouselExampleIndicators" type="button"></button> <button aria-label="Slide 3"
            data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>
    </div>




</div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators"
    type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span
        class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next"
    data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true"
        class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
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
            @foreach ($produits as $produit)
                <div class="col-12 col-md-12 col-lg-4 mb-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4"><img height="200px" width="300px" alt="" class=""
                                    src="{{ asset('storage/' . $produit->image) }}"></div>
                            <h3 class="card-title">{{ "$produit->titre" }}</h3>
                            <p class="lead text-truncate">{{ "$produit->description" }}</p>
							<form action="{{ route('cartStore' , $produit->id) }}" method="POST">
								@csrf
                            	<button class="btn bg-warning text-dark">commander</button>
							</form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


    {{-- <div class="row">
        <div class="container">
            @foreach ($produits as $produit)
                <div class="row justify-content-center align-items-center height">
                    <div class="card p-3" style="width: 350px;">
                        <div class="row justify-content-between align-items-center">
                            <div class="col mt-2">
                                <h4 class="text-uppercase">Ikea</h4>
                                <div class="mt-5">
                                    <h5 class="text-uppercase mb-0">{{ "$produit->titre" }}</h5>
                                    <h1 class="main-heading mt-0">{{ "$produit->type" }}</h1>
                                    <div class="d-flex flex-row user-ratings">
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <h6 class="text-muted ml-1">4/5</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col image">
                                <img src="{{ asset('storage/' . $produit->image) }}" width="200">
                            </div>
                        </div>

                        <div class="row justify-content-between align-items-center mt-2 mb-2">
                            <span>le prix de produit </span>
                            <div class="colors">
                                <span class="color-circle bg-red"></span>
                                <span class="color-circle bg-blue"></span>
                                <span class="color-circle bg-yellow"></span>
                                <span class="color-circle bg-purple"></span>
                            </div>
                        </div>

                        <p>{{ "$produit->description" }}.</p>
                        <button class="btn btn-danger">Add to cart</button>
                    </div>
            	</div>
            @endforeach
        </div>
    </div> --}}

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
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                            nostrum illo tempora esse quibusdam.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i
                                class="bi bi-facebook text-dark mx-1"></i> <i class="bi bi-linkedin text-dark mx-1"></i>
                            <i class="bi bi-instagram text-dark mx-1"></i>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-2.jpg') }}">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                            nostrum illo tempora esse quibusdam.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i
                                class="bi bi-facebook text-dark mx-1"></i> <i
                                class="bi bi-linkedin text-dark mx-1"></i> <i
                                class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-3.jpg') }}">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                            nostrum illo tempora esse quibusdam.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i
                                class="bi bi-facebook text-dark mx-1"></i> <i
                                class="bi bi-linkedin text-dark mx-1"></i> <i
                                class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-body">
                        <img alt="" class="img-fluid rounded-circle" src="{{ asset('img/team-4.jpg') }}">
                        <h3 class="card-title py-2">Jack Wilson</h3>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi ipsam
                            nostrum illo tempora esse quibusdam.</p>
                        <p class="socials"><i class="bi bi-twitter text-dark mx-1"></i> <i
                                class="bi bi-facebook text-dark mx-1"></i> <i
                                class="bi bi-linkedin text-dark mx-1"></i> <i
                                class="bi bi-instagram text-dark mx-1"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All Right Reserved By @website Name</p>
        </div>















        @if (count($produits) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prix</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($produits as $produit)
                        <tr>
                            <td>{{ $produit->name }}</td>
                            <td>{{ $produit->prix }}€</td>
                            <td>1</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <button onclick="confirmOrder()">Confirmer la commande</button>
        @else
            <p>Votre panier est vide.</p>
        @endif

        <script>
            function confirmOrder() {
                // Envoyer une requête pour confirmer la commande
                // Marquer les produits comme "isOrdered"
                // Vider le panier
            }
        </script>

    </footer>
    <!-- footer ends -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    </body>

    </html>
