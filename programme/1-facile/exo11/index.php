<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Création d'un nombre aléatoire et test avec switch.</h1>

<?php

    $hommes = ["Matthieu", "Pierre", "Marc", "Jean"];

    $femme = ["Morgane", "Mathilde", "Julie"];

    function afficherTableau(array $array){
        foreach($array as $index => $arr){
            echo "$index : $arr <br />";
        }
        echo "---------------<br />";
    }

    afficherTableau($hommes);
    afficherTableau($femme);

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
