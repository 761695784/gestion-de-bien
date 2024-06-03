<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    <form action="" method="" >
@csrf


<label for="nom"></label>
<input type="text" name="nom" id="nom" value="">

<label for="categorie"></label>
<input type="text" name="categorie" id="categorie" value="">

<label for="image"></label>
<input type="text" name="image" id="image" value="">

<label for="description"></label>
<textarea name="description" id="description" cols="30" rows="10"></textarea>

<label for="addresse"></label>
<input type="text" name="addresse" id="addresse" value="">

<label for="status"></label>
<input type="text" name="status" id="status" value="">

<button type="submit" name="" >  </button>
    </form>

  


</body>
</html>