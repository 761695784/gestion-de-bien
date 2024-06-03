<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>









      <div class="container mt-5">
        <h1 class="text-center">Ajouter un bien immobiler</h1>

        @if (session('status'))
        <div class="alert alert-success">
            {{session('status')}}
            
        </div>   
    @endif

      <ul>
        @foreach($errors->all() as $error)
            <li class="alert alert-danger">
               {{$error}}
            </li>
        @endforeach
      </ul>     



      <form action="/ajouter" method="POST">
        @csrf
      <div class="mb-3">
        <label for="ImageArticle" class="form-label">Image</label>
        <input class="form-control" type="string" name="image"  >
      </div>
      <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Entrez le nom du bien">
      </div>
      <select class="" aria-label="Default select example" name="categorie" >
        <option selected> Choisir la catégorie</option>
        <option value="luxe">luxe</option>
        <option value="standard">standard</option>
      </select>
      <div class="mb-3">
        <label for="Adresse" class="form-label">Adresse</label>
        <input type="text" class="form-control" name="adresse" placeholder="Entrez l'adresse ">
      </div>

     
      <div class="mb-3">
        <label for="DatePubli" class="form-label">Publié le</label>
        <input type="date" class="form-control" name="DatePubli" >
      </div>

      <div class="mb-3">
        <input type="checkbox" class="form-check-input" name="statut">
        <label for="statut" class="form-check-label">Occupé</label>
    </div>

      
      <div class="mb-3">
        <label for="Description" class="form-label">Description des biens</label>
        <textarea class="form-control"  name="description" rows="3" placeholder="Entrez la description du bien"></textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Ajouter</button>
      <a href="/liste" class="btn btn-danger">Revenir a la liste des biens </a>
    </form>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>