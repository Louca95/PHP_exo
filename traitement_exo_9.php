<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2</title>
    <link rel="stylesheet" href="/css/style_exo_9.css">
</head>

<body class=""> <!-- Appliquer la classe correspondante pour la couleur -->
    <h1>Bienvenue sur la page 2</h1>
    <p>Ceci est une deuxième page qui conserve la couleur de fond sélectionnée.</p>

    <?php
    if (isset($_POST['colors'])) {
        $colors = $_POST['colors'];
    } else if (isset($_COOKIE['colors'])) {
        $colors = $_COOKIE['colors'];
    } else {
        $colors = 'background color ="white"';
    }
    if(empty($_POST['red']) && empty($_POST['blue']) && empty($_POST['green'])){
        echo "champ a remplir";
     }else{
        echo  $_POST['blue'];
        echo  $_POST['red'];
        echo  $_POST['green'];
     }
?>


    <h2><a href="index.php">Retour à la première page</a></h2>
</body>

</html>
