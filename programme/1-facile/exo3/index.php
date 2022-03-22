<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les test"; //Mettre le nom du titre de la page que vous voulez
?>


<?php 

    $nombreAlea = rand(1, 20);
    echo $nombreAlea;

    switch($nombreAlea){
        case $nombreAlea <= 5 : 
            echo "Il est compris entre 1 et 5";
                break;
        case $nombreAlea <= 10 : 
            echo "Il est compris entre 6 et 10";
                break;
        case $nombreAlea <= 15 : 
            echo "Il est compris entre 11 et 15";
                break;
        case $nombreAlea <= 20 : 
            echo "Il est compris entre 16 et 20";
                break;
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
