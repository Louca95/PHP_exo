<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo_sur_les_Date_php</title>
</head>
<body>
    <?php

    echo '<p>' . date('d/m/Y H:i:s') . '</p>';

   
    $dateJour = strtotime('2024-08-08');
    echo date('d/m/Y', $dateJour);

    $date1 = strtotime('15-02-1990');
    $date2 = strtotime('18-10-2024');
    echo("<p>Valeur date 1: ".$date1."</p>");
    $diffSeconds = $date2 - $date1;
    echo"<p> dates2: ".$date2."</p>";
    $diffDays = $diffSeconds / (60 * 60 * 24 * 365); 

    $age = floor($diffDays);
    echo "<p>Il as pour age $diffDays.</p>";


    $dateLisible = time();
     echo "<p>Date : $dateLisible</p>";

     $timestamp = 1729209600;


    $dateLisible = time();
    echo date('d-m-Y', $timestamp); 


    $date3 = strtotime('18-10-2024');
    $date4 =strtotime("+1 week ");
    $resultat = $date3 * $date4;
    $resultat2 = $resultat /(60 * 60 * 24);

    echo $resultat2;

   

    ?>
</body>
</html>