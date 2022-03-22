<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Les tableaux"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Création d'un nombre aléatoire et test avec switch.</h1>

<?php

    $marc = [12, 15, 13, 7, 18];
    $matthieu = [11, 14, 10, 4, 20, 8, 2];
    $notesEleves = [$marc, $matthieu];

    for($i = 0; $i <= count($notesEleves) -1; $i++){
        echo "La moyenne des notes du $i eme element est de ".calculerMoyenne($notesEleves[$i])."<br />";
    }

    function calculerMoyenne($notes){
        $total = 0;
        foreach($notes as $note){
            $total += $note;
        }
        return $moyenne = $total / count($notes);
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
