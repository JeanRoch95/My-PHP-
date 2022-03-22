<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : La boucle for "; //Mettre le nom du titre de la page que vous voulez
?>

<?php

    for($i = 1; $i <= 10; $i++){
        echo "8 * ".$i." = ". 8*$i." <br />";
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
