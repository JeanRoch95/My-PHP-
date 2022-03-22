<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Les fonctions</h1>

<?php

$monMot = "coucou";
$monMotSansVoyelle = supprimerVoyelle($monMot);

echo "$monMot sans voyelle est $monMotSansVoyelle";

function supprimerVoyelle($mot){
    $voyelle = ["a", "e", "i", "o", "u", "y"];
    $resultat = str_replace($voyelle, "",$mot);
    return $resultat;
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
