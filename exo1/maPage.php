<?php

    // $nomDuJoueur1 = "Jean-Roch";
    // $age = 9;
    // $estUnHomme = true;
    
    // $nomDuJoueur2 = "Agnes";
    // $age2 = 25;
    // $estUnHomme2 = false;

define ("SEPARATEUR", "+");

$joueur1 = [
    'name' =>"Jean-Roch", 
    'age' => 26,
    'estUnHomme' => true
];
$joueur2 = [
    'name' =>"Agnes", 
    'age' => 58,
    'estUnHomme' => false
];

$joueur3 = [
    "nom" => [
        'surname' => "Jean-Paul",
         'name' => "TOMASO"
        ],
    'age' => 62,
    'estUnHomme' => true
];


genererSeparation(SEPARATEUR);
afficherTableau($joueur1);
genererSeparation(SEPARATEUR);
afficherTableau($joueur2);
genererSeparation(SEPARATEUR);
afficherTableau($joueur3);
genererSeparation(SEPARATEUR);


afficherJoueurLePlusAgee($joueur1['age'], $joueur2['age']);
genererSeparation(SEPARATEUR);
$differenceAge = calculDiffAge($joueur1['age'], $joueur2['age']);
echo 'La différence d\'age est de '.$differenceAge;

genererSeparation(SEPARATEUR);
afficherMajeur($joueur1['age']);
genererSeparation(SEPARATEUR);
afficherMajeur($joueur2['age']);

function afficherJoueur1(string $nom, int $age, bool $homme){
    echo 'Nom du joueur : '.$nom;
    echo '<br />';
    echo 'Age du joueur : '.$age;
    $age += 1;
    echo '<br />';
    echo 'Age du joueur : '.$homme;
    echo '<br />';

    if ($homme === true) {
        echo 'C\'est un homme';
    } else {
        echo "C'est une femme";
    }
}    

function test(){
    $a = 5;
    $b = 10;

    return $a*$b;
}

function afficherJoueurLePlusAgee(int $age, int $age2){
    if ($age > $age2){
        echo 'le joueur 1 est le plus agé';
    } else {
        echo "le joueur 2 est le plus agé";
    }
}

function calculDiffAge(int $age, int $age2){
    $resultat = $age - $age2;
    if ($resultat < 0){
        $resultat = -$resultat;
    }
    return $resultat;
}


function genererSeparation($separateur){
    echo "<br />";
    echo "<br />";
    for($i = 0; $i < 50; $i++){
        echo $separateur;
    }
    
    echo '<br />';
    echo '<br />';
}

function afficherMajeur($age){
    switch($age){
        case ($age > 18) : echo 'Il est majeur';
        break;
        case 17 : echo 'Il est mineur';
        break;
        default : echo 'Il est trop vieux';
        break;
    }
}

function afficherTableau($tab){
    // for($i = 0; $i < count($tab); $i++){
    //     echo $tab[$i];
    //     echo '<br />';
    // }
    foreach($tab as $indice => $value){
        if (!is_array($value)){
            echo $indice.' : '.$value;
        } else {
            afficherTableau($value);
        }
        echo '<br />';
    }
}

?>