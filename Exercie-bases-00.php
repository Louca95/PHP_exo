<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercie-bases-00</title>
</head>
<body>

    <h1>Exercice de bases PHP</h1>
    <?php

    echo "Hello World, Bienvenue sur mon premier script PHP";

    ?>
    <?php

    echo "Bonjour tout le monde !" . "<br>";
    print "Aujourd'hui, nous sommes le 14/10/2024". "<br>";

    echo "<p>Ce texte est affiché depuis PHP</p>";

    //Objectif : comprendre la différence entre echo et print

    /*
   ECHO accepte plusieurs arguments séparés par des virgules (exemple : echo "Coucou je m'appelle antoine","J'aimerais dire
            quelques mots" et ne retourne rien)

    PRINT n'accepte qu'un argument (une erreur apparaitra si vous tentez de mettre une virgule après) et retourne toujours
            true (ce qui fait qu'on peut l'utiliser en valeur de variable par exemple : $vraioufaux = print "ceci est un test", la
            valeur de vraioufaux sera true (1));
    */

    $nombre = 10;

    var_dump($nombre);

    echo "<br>";

    $str = "Type strings";

    var_dump($str);

    echo "<br>";

    echo '<b>Louca</b><i>avance</i><u>dans le couloirs</u>';


    echo "<div> 
            <h1>Bienvenue</h1>
            <h2> sur mon application </h2>
        </div>"; // j ai fais un echo puis dans ce echo j ai mis une div puis un h1 pour le titre qui dit bienvenue puis un h2 pour preciser que ces sur mon application

    echo '<div> 
        <h1>Bienvenue</h1>
        <h2> sur mon application </h2>
        <p> totalement innovente</p>
        </div>';

    $timestamp = time();
    $date = date('Y-m-d', $timestamp);
    echo $date;

    $message = "Bonne Apétits";
    echo '<div>
    <h1>' . $message . '</h1>

    </div>';

    ?>
    <h1>Exercice concatenation en php </h1>
    <?php

$name ="mercier";

$firstname ="louca";
 echo $firstname, $name;

 echo "<br>";

$phrase1 ="Le ciel est";
$phrase2 ="bleu aujourd'hui";
echo $phrase1 . $phrase2;

echo "<br>";

$mot1 ="J'aime";
$mot2 ="le";
$mot3 ="PHP";
echo $mot1,',',$mot2, ',' ,$mot3;

echo "<br>";

$operateur ='je vais';
$operateur .='a la plage';
echo $operateur;

echo "<br>";

$citation = 'Il a dit : "Le PHP est fantastique"';
echo $citation;

echo "<br>";

$code = "PHP";
echo "le mot est : $code";

echo "<br>";

$nom = 19;
echo "Bonjour, $nom, bienvenue sur notre site!";

echo "<br>";

$citation1 = "la vie et belle ";
$citation2 = ', surtout quand on code en PHP!';

echo "$citation1 $citation2";
    ?>
    
    
</body>
</html>