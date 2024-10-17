<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice-boucle-php</title>
</head>
<body>
    <?php
    $i = 0;    
    while ($i < 21) {  
        echo "$i---";  
        $i++;          
    } 
    echo '<br>';

    $i = 2000;    
    while ($i < 2025) {  
        echo "<div>
                <ul><li>$i</li></ul>
              </di>";  
        $i++;          
    } 
    echo '<br>';

    $i = 3;

    do {
        echo $i ;
        $i+=3;
    } while ($i < 30);

    echo "<br>";

    $num = 9;

    for ($i = 0; $i < 10; $i++) { 
       $result = $num*$i;
       echo $num . " * " . $i . " = " .$result . "<br>";
    }
    ?>
  <table >
    <tbody>
        <?php
        
        for ($i = 1; $i <= 5; $i++) { 
            echo '<tr>'; 
            for ($j = 1; $j <= 5; $j++) { 
                echo '<td>' . $i . ',' . $j . '</td>'; 
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<?php
$tabAssoc = [
            "prenom" => 'jule', 'caramel', 'josephine', 'ange',
            "nom" => 'keskillia', 'paysan', 'fatigué', 'tombe',
            "email" => 'julekeskillia@gmail.com', 'caramelpaysan@gmail.com', 'josephinefatigue@gmail.com', 'angetombe@gmail.com',
            "age" => 'prenom', 'nom', 'email', 'age'
        ];

        foreach($tabAssoc as $index => $valeur) {
            echo '<p>'. $index . ' : ' . $valeur . '</p>';
        }
?>


    
</body>
</html>