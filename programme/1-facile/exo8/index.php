<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : La boucle While"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Création d'un nombre aléatoire et test avec switch.</h1>

<?php

    $random = rand(1, 20);
    $cpt = 1;

    while($random < 15){
        echo "Essaie $cpt : $random est trop petit <br />";
        $random = rand(1, 20);
        $cpt++;
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
