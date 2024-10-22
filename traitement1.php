


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Détail du produit</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<?php
        
        $prixMinimum = 20;

        echo '<pre>';
            var_dump($_GET); 
        echo '</pre>';

       
        if (isset($_GET['article']) && isset($_GET['couleur']) && isset($_GET['prix'])) { 
            $prix = (float) $_GET['prix']; 

            echo '<div class="details">';
            echo '<h1>Détail du produit</h1>';
            echo '<p>Article : ' . htmlspecialchars($_GET['article']) . '</p>';
            echo '<p>Cette Couleur : ' . htmlspecialchars($_GET['couleur']) . ' me fait penser à l\'azur d\'un océan</p>';
            echo '<p>Prix : ' . htmlspecialchars($prix) . '€</p>';

            
            if ($prix >= $prixMinimum) {
                echo '<p>Le prix est suffisant.</p>';
            } else {
                echo '<p>Le prix est insuffisant. Il doit être au moins de ' . $prixMinimum . '€.</p>';
            }
            
            echo '</div>';
        } else {
            echo '<p class="error">Ce produit n\'existe pas !</p>';
        }
    ?>

</body>
</html>