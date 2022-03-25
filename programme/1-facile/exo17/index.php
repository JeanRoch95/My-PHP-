<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Les tableaux complexes"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Les tableaux complexes</h1>


    <?php

$perso1 = [
    "Nom" => "Matthieu",
    "Age" => 30,
    "Sexe" => true,
    "note" => [2, 12, 18, 8, 15]
];
$perso2 = [
    "Nom" => "Isabelle",
    "Age" => 28,
    "Sexe" => true,
    "note" => [3, 2, 20, 14, 15]
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

    // for($i = 0; $i < count($joueur["note"]); $i++){
    //     echo "Note : ". ($i + 1). " : ". $joueur["note"][$i]. "<br />";
    // }
    $resultat = 0;
    foreach($joueur["note"] as $index => $notes){
        $resultat += $notes;
        echo "Note : ". ($index + 1). " : ". $notes. "<br />";
        // Affichage des notes avec for ou foreach
    }
    echo "La moyenne est de : ". ($resultat / count($joueur["note"])). "<br />";
}
// Faire un appel de fonction dans forEach pour traiter chaque joueurs.
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
