<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonction</title>
</head>
<body>
    <?php
    function greet(){
        echo "Hello, world!";
    };
    greet();

    echo "<br>";

    function greetUser($name){
        
        echo "Hello, [name]!";
    };
    greetUser('name');
    
    echo "<br>";

    function sum($a, $b){
        echo $a+$b;
    };
    sum(1, 1);

    echo "<br>";

    $numbersarry = [12, 40, 50, 99];
    function  sumArray($numbers){
       
            $resultat =  array_sum($numbers);
            echo $resultat;

    };
    sumArray($numbersarry);

    echo "<br>";

    function greetWithTime($days =" lundi ", $timeOfDay = "12 H"){
        echo $days, $timeOfDay;
    };
    greetWithTime();
   
    echo "<br>";

    function getFruits(){
        $fruits = ["peche" . "mangue" . "annanas"];
        
        var_dump($fruits);
        return $fruits;  
    };
    $fruitz = getFruits();
    echo $fruitz;

    echo "<br>";

    function reverseString($str){
        echo strrev($str); 
    };
    reverseString("hello wordl");

    echo "<br>";

    function divide($a, $b){
        if($b === 0){
            echo $b/$a;
        }else {
            echo "il ne peut patre divisé par $b";
        }
    };
    divide(15, 0);

    echo "<br>";

    function generateMultiplicationTable($number){
        
        for ($i = 1; $i < 11; $i++) {
            echo "<br> $number x $i = " . $number * $i;
        }
    };
    generateMultiplicationTable(5);

    echo "<br>";

    function checkEligibility($age, $hasLicense){
        if($age >= 18 && $hasLicense ===true){
            echo "il a l age pour passer le permie de conduire";
        } else {
            echo "il n'as pas l'age pour passez le permie de conduire et n'est pas eligible";
        }
    };
    checkEligibility(17, true)
    ?>
</body>
</html>