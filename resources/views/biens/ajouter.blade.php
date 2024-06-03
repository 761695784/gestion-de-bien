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
    <header>
    <nav class="navbar">
    <h1> Immo</h1>
    <ul>
         <li><a href="#">Accueil</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">A propos</a></li>
        <li><a href="#">contact</a></li>
     </ul>
    </nav>
    </header>
     
    <h1>Ajouter un bien immobiler</h1>
    <form action="/" method="" >




<label for="image">image</label>


<label for="nom">nom</label>


<label for="categorie">categorie</label>


<label for="adresse">adresse</label>


<label for="Date">Date</label>
<input type="date" name="DatePubli" >


<label for="status">Statut</label>
<input type="checkbox" name="status"  >



<label for="description"></label>
<textarea name="description" id="description" cols="20" rows="10"></textarea>

<button type="submit" name="" > Envoyer </button>
    </form>

    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="text" name="image" >        
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="text" name="nom" id="nom" >
        </div>
        <div class="mb-3 form-check">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" name="adresse"  >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="text" name="nom" id="nom" >
        </div>
        <div class="mb-3 form-check">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="text" name="adresse"  >
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>