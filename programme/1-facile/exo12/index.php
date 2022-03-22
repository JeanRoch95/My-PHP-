<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Création d'un nombre aléatoire et test avec switch.</h1>

<?php

    $marc = [12, 15, 13, 7, 18];
    $matthieu = [11, 14, 10, 4, 20, 8, 2];
    function calculerMoyenne($notes){
        $total = 0;
        foreach($notes as $note){
            $total += $note;
        }
        $moyenne = $total / count($notes);
        echo round($moyenne, 2);
        echo "<br />";
    }

    calculerMoyenne($marc);
    calculerMoyenne($matthieu);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
