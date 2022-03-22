<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Les tableaux associatifs</h1>

<?php

$perso1 = [
    "Nom" => "Matthieu",
    "Age" => 30,
    "Sexe" => true
];
$perso2 = [
    "Nom" => "Isabelle",
    "Age" => 28,
    "Sexe" => true
];

$allPerso = [$perso1, $perso2];

foreach($allPerso as $persos){
    afficherTableau($persos);
    echo "---------------- <br />";

}

function afficherTableau($joueur){
    echo "Nom : " .$joueur["Nom"]. "<br />";
    echo "Age : " .$joueur["Age"]. "<br />";
    if ($joueur["Sexe"] === true){
        echo "Sexe : Homme <br />";
    } else {
        echo "Sexe : Femme <br />";
    }
}

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
