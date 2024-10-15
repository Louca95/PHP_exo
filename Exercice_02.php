<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerxcice-02-PHP</title>
</head>
<body>
    <?php
    $age = 119;
    echo ($age > 0 AND $age < 120) ? "la reponse est correcte" : "la reponse n est pas correct";

    echo "<br>";

    $montant = 80;
if($montant > 100){
    $montant *= 0.9;
    echo $montant;
    echo "<br>";
}else if ($montant >= 50 && $montant <= 100){
    $montant *= 0.95;
    echo $montant;
}else{
    echo "aucune remise n'est disponible";
};

$jour = 1;
switch($jour){
    case 1 :
     echo "<p>Nous somme lundi</p>";
    break;
    case 2 :
        echo "<p>Nous somme mardi</p>";
    break;
    case 3 :
        echo "<p>Nous somme mercredi</p>";
    break;
    case 4 :
        echo "<p>Nous somme jeudi</p>";
    break;
    case 5 :
        echo "<p>Nous somme vendredi</p>";
    break;
    case 6 :
        echo "<p>Nous somme samedi</p>";
    break;
    case 7 :
        echo "<p>Nous somme dimanche</p>";
    break;
    default : echo "ce n'est pas un jour de la semain";
}

$a = 10;
$b = 10;

echo ($a === $b) ? "ils sont identiques" : "il ne sont pas identique";

echo "<br>";

$Moyenne =(8 + 12 + 16) / 3;
if( $Moyenne >= 14){
 echo "vous pavez passer l'axamen";
}else{
    echo "vous ne pouvez pas passer l'examen";
}

echo "<br>";

$var1 = 0;
$var2 = "";

if(isset($var2)) {
    echo "<p>existe et est non NULL sur la var2</p>";
} else {
    echo "<p>n'existe pas !</p>";
}
if(isset($var1)) {
    echo "<p>existe et est non NULL sur la var1</p>";
} else {
    echo "<p>n'existe pas !</p>";
}


    $var3 = 1;
    $var4 = "hello";

    if(empty($var3)) {
      echo "0, donc elle est vide, vraie ou non définie";  
    } else {
        echo "Elle n'est ni vide, elle est fausse et définie";
    }

    echo "<br>";

    if(empty($var4)) {
        echo "0, donc elle est vide, vraie ou non définie";  
      } else {
          echo "Elle n'est ni vide, elle est fausse et définie";
      }
  
      echo "<br>";

    $total = 10;

    $reste = $total % 2;

    if($reste > 0){
    echo "impaire";
    }else{
        echo "pair";
    }

    ?>
</body>
</html>