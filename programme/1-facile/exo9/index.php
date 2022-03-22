<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 9 : Les fonctions"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Function qui vérifie si un nombre est Pair</h1>

<?php

    function isPair(int $nombre): string{
        if ($nombre % 2 === 0){
            return "Le nombre $nombre est un nombre pair";
        } else {
            return "Le nombre $nombre est un nombre impair";
        }
    }

    echo isPair(rand(1, 20));

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
