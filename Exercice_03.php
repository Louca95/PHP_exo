<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux-exo-php</title>
</head>
<body>
    <?php
    $tab = ['Rasta rocket', 'ça', 'Black Panther', 'Batman','Kaizen'];
    var_dump($tab) . '<br>';

    $tab = ['fraise', 'Framboise', 'peche'];
    var_dump($tab) . '<br>';

    array_push($tab, 'clémentine');
    var_dump($tab) . '<br>';

    unset($tab[0]);
    var_dump($tab) . '<br>';
    
    $personne = [
        'nom' => 'bertran',
        'prenom' => 'julien',
        'age' => 40
    ];
    echo 'il s\'appelle ' . $personne['nom'] . '<br>';
    echo $personne['prenom']. '<br>';
    echo 'il a' . $personne['age']. 'ans <br>';

    $tab = ['Paris', 'Toulouse', 'Marseille',];
    echo sizeof($tab);
    echo '<br>';
    echo count($tab);

    echo '<br>';

    $tab_multi = [
        0 => [
            'prenom'    => 'pauline',
            'nom'       => 'Dupon',
            'note' => 17
        ],
        1 => [
            'prenom'    => 'Nicolas',
            'nom'       => 'Duran',
            'note' => 6
        ],
        2 => [
            'prenom'    => 'Pierre',
            'nom'       => 'Dulac',
            'note' => 10
        ]
    ];
    echo "voici ca note: " . $tab_multi[0]['note'];
    var_dump($tab_multi) . '<br>';
    
    $tab_multi[1]['note'] = 12;
    echo "voici ca note: " . $tab_multi[1]['note'];
    var_dump($tab_multi) . '<br>';

    $mois = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];
    for ($i = 0; $i < count($mois); $i++) {
        echo $mois[$i] . '<br>';
    }

    $number = [5, 10, 19, 8, 4, 6 ,7];
    $num = 5;
    if(in_array($num,$number)){
        echo 'Oui, il y a le numero dans le tableau';
    }
        
    else {
        echo 'Non, il n\'y a pas de numéro dans ce tableau';
    }

    echo '<br>';

    $name = array('maurice', 'mercier', 'beaufort');
    $firtname = array('avocado', 'louca', 'nelson');
    $fullname = array_combine($firtname, $name);
    
    
    print_r($fullname) . '<br>';

    $name = array('maurice', 'mercier', 'beaufort');
    $firtname = array('avocado', 'louca', 'nelson');
    $fullname = [];
    for ($i = 0; $i < count($mois); $i++) {
        echo $mois[$i] . '<br>';
    }

    ?>
</body>
</html>