<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix de couleur de fond</title>
   <link rel="stylesheet" href="css/style.css">
</head>

<body class="">
    <h1>Choisissez votre couleur de fond :</h1>

    <form action="" method="POST">
        <input type="radio" id="red" name="color" value="<?php if (isset($_POST['red'])) { echo $_POST['red']; } 
        echo 'class="fond_rouge"'; ?>"
        
        <label for="red">Rouge</label><br>

        <input type="radio" id="green" name="color" value="green">
        <label for="green">Vert</label><br>

        <input type="radio" id="blue" name="color" value="blue">
        <label for="blue">Bleu</label><br>

        <input type="submit" value="Appliquer">
    </form>
    <?php
    if (isset($_POST['colors'])) {
        $colors = $_POST['colors'];
    } else if (isset($_COOKIE['colors'])) {
        $colors = $_COOKIE['colors'];
    } else {
        $colors = 'background color ="white"';
    }

    if(empty($_POST['red']) && empty($_POST['blue']) && empty($_POST['green'])){
        echo  $_POST['blue'];
        echo  $_POST['red'];
        echo  $_POST['green'];
     }else{
       echo "champ a remplir";
     }
?>

    <!-- Lien vers la deuxième page -->
    <h2><a href="page2.php">Aller à la deuxième page</a></h2>
    
    <h2><a href="?reset=true">Réinitialiser la couleur</a></h2>

</body>

</html>
