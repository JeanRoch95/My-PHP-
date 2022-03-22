<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Switch"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Création d'un nombre aléatoire et test avec switch.</h1>

<?php

$nombreAlea = rand(1, 12);

switch($nombreAlea){
    case $nombreAlea === 1 : 
        echo 'Le moi 1 en chiffre correspond au moins Janvier en lettre.';
    break;
    case $nombreAlea === 2 : 
        echo 'Le moi 2 en chiffre correspond au moins Fevrier en lettre.';
    break;
    case $nombreAlea === 3 : 
        echo 'Le moi 3 en chiffre correspond au moins Mars en lettre.';
    break;
    case $nombreAlea === 4 : 
        echo 'Le moi 4 en chiffre correspond au moins Avril en lettre.';
    break;
    case $nombreAlea === 5 : 
        echo 'Le moi 5 en chiffre correspond au moins Mai en lettre.';
    break;
    case $nombreAlea === 6 : 
        echo 'Le moi 6 en chiffre correspond au moins Juin en lettre.';
    break;
    case $nombreAlea === 7 : 
        echo 'Le moi 7 en chiffre correspond au moins Juillet en lettre.';
    break;
    case $nombreAlea === 8 : 
        echo 'Le moi 8 en chiffre correspond au moins Aout en lettre.';
    break;
    case $nombreAlea === 9 : 
        echo 'Le moi 9 en chiffre correspond au moins Septembre en lettre.';
    break;
    case $nombreAlea === 10 : 
        echo 'Le moi 10 en chiffre correspond au moins Octobre en lettre.';
    break;
    case $nombreAlea === 11 : 
        echo 'Le moi 11 en chiffre correspond au moins Novembre en lettre.';
    break;
    case $nombreAlea === 12 : 
        echo 'Le moi 12 en chiffre correspond au moins Decembre en lettre.';
    break;
    default:
        return null;
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
