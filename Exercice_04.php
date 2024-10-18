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
    while ($i < 20) {  
        echo "$i---";  
        $i += 2;          
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

$identité = ['nom' =>'jean',
'prenom' => 'Pierre',
'ages' => 21,
'mails' => '<a href=>pierre.jean@edhec.com</a>'];

var_dump($identité);

foreach($identité as $clef => $valeur){
    echo '<p>' . $clef . ' ' . $valeur . '</p>';
}

echo '<br>';

$navigation = [
'acceuil' =>'<a href=>bienvenu</a>',
'produits' => '<a href=>le comte du pere johanis</a>',
'contact' => '<a href=>08 08 08 08</a>'
];

foreach($navigation as $clef => $valeur){
    echo '<p>' . $clef . ' ' . $valeur . '</p>';
}

?>
 <table border='1'>
    <tbody>
        <?php
        
        for ($i = 0; $i <= 9; $i++) { 
            echo '<tr>'; 
            for ($j = 0; $j <=9; $j++) { 
                $num = random_int (0, 99);
                echo '<td>' . $num . '</td>'; 
            }

            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<?php


$amibo = [
    'person1' => [
    'firstname' => 'josephone',
    'name' => 'appels ange',
    'age' => 12,
    ],

    'person2' => [
    'firstname' => 'eau',
    'name' => 'decologne',
    'age' => 27,
    ],

    'person3' => [
        'firstname' => 'emanuelle',
        'name' => 'micronde',
        'age' => 58,
        ],

 ];

 echo "<ol>
    <li> person1 </li>";
echo "<ul>";
 foreach($amibo['person1'] as $key => $value){
    echo "<li> $key: $value </li>";
 }
 echo "</ul>";

 echo "<li> person2 </li>
 <ul>";
 foreach($amibo['person2'] as $key => $value){
    echo "<li> $key: $value </li>";
 }
 echo "</ul>";

 echo "<li> person3 </li>
 <ul>";
 foreach($amibo['person3'] as $key => $value){
    echo "<li> $key: $value </li>";
 }
 echo "</ul>
 </ol>";

 echo "<h2>Ex 9</h2>";
 $tab_multi = [
    'personne1' => [
        'prenom'    => 'garfieldelle',
        'nom'       => 'Lazagne',
        'age' => 17
    ],
    'personne2' => [
        'prenom'    => 'Nicolas',
        'nom'       => 'Dupont de ligonesse',
        'age' => 22
    ],
    'personne3' => [
        'prenom'    => 'Alfred',
        'nom'       => 'Batman',
        'age' => 27
    ]
];

echo "<ol>";
foreach($tab_multi as $index => $valeur) {
echo "<li>$index</li>";
echo "<ul>";
echo "<li>" . 'prenom' .' : '.  $tab_multi[$index]['prenom'] . "</li>";
echo "<li>" . 'nom' .' : '.  $tab_multi[$index]['nom'] . "</li>";
echo "<li>" . 'age' .' : '. $tab_multi[$index]['age'] . "</li>";
echo "</ul>";
}




?>

    
</body>
</html>