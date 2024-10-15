<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exerxcice-01-phpt</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 4;

    echo $a + $b . '<br>';   
    echo $a - $b . '<br>';   
    echo $a * $b . '<br>';   
    echo $a / $b . '<br>';   
    echo $a % $b . '<br>';

    $c = 10;
    $d = 4;

    
    echo $c += $d;
    echo "<br>";
    echo $c -= $d;  
    echo "<br>"; 
    echo $c *= $d; 
    echo "<br>";  
    echo $c /= $d;
    echo "<br>";   
    echo $c %= $d;

    echo "<br>";

    $counter = 10;
    $counter++;
    
    echo $counter;

    echo "<br>";

    $counter = 10;
    $counter--;

    echo $counter;

    echo "<br>";

    $num = 10;
    $k = $num++;
    echo $num;

    echo "<br>";

    $num--;
    echo $num;

    echo "<br>";

    $age = 20;
    $age++;
    $age--;
    
    echo $age;
    
    echo "<br>";

    $total = 37;

    $reste = $total % 2;

    if($reste > 0){
    echo "impaire";
    }else{
        echo "pair";
    }

    echo "<br>";

    $quantity = 5;

    $quantity += 3;
    $quantity -=2;
    echo $quantity;

    echo "<br>";

    $kilometres = 100;
    $kilometres *= 0.621371;
    echo $kilometres;

    echo "<br>";
    
    $score = 50;
    $score += 10;
    $score -=5;
    echo $score
    ?>
</body>
</html>