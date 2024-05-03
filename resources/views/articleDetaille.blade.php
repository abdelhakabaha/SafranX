@include('header');
<br>
<br>
<br>
	<div class="container py-4">
		<div class="row">
		  <div class="col-md-8 offset-md-2">
			<h1 class="text-center">{{ "$articl->titre" }}</h1>
			<img height="500px" width="600px" src="{{ asset('storage/'.$articl->image)}}" class="img-fluid" alt="Image de l'article">
			<p class="mt-2">{{ "$articl->description" }}</p>
			<p class="mt-2">{{ "$articl->timestamps" }}</p>
			<div id="details-article" class="article-full-width" style="display: none;">
			  <h2 class="text-center">Détails de l'article</h2>
			  <p>Description détaillée de l'article.</p>

			</div>
		  </div>MM
		</div>
	  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
