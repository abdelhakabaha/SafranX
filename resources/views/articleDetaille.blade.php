<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails de l'article</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Personnalisez vos styles CSS ici */
    .article-full-width {
      transition: all 0.3s ease-in-out; /* Animation de transition pour le passage en plein écran */
    }
  </style>
</head>
<body>

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
		  </div>
		</div>
	  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
