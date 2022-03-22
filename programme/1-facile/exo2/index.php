<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Variables et Ternaires"; //Mettre le nom du titre de la page que vous voulez
?>
<?php

$nom = "Marie";
$age = 30;
$homme = false;

$nom2 = "Pierre";
$age2 = 32;
$homme2 = true; 

echo $nom." à ". $age ." ans et c'est ". ($homme === false ? "une femme" : "un homme")."<br />";
echo $nom2." à ". $age2 ." ans et c'est ". ($homme2 === false ? "une femme" : "un homme")."<br />";

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
