
<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - SESSION</title>
    <link rel="stylesheet" href="/css/style_exo_10.css">
</head>

<body>
    <h1>Page d'inscription</h1>

    <form action="traitement_exo_10.php" method="post">
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom"  >
        </div>
        <div>
            <label for="prenom">Votre prenom</label>
            <input type="text" id="prenom" name="prenom" >
        </div>
        <div>
            <label for="email">Votre email</label>
            <input type="email" id="email" name="email" >
        </div>
        <div>
            <label for="mdp">Votre mot de passe</label>
            <input type="password" id="mdp" name="mdp" >
        </div>
        <input type="submit" id="submit_inscription" name="submit_inscription">
    </form>
    
</body>

</html>