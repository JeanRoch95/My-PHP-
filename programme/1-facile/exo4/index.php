<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les test"; //Mettre le nom du titre de la page que vous voulez
?>


<?php 

$random = rand(1, 100);
$random2 = rand(1, 100);

echo "Chiffre 1 : ". $random. "<br />";
echo "Chiffre 2 : ". $random2. "<br />";

$resultat = abs($random - $random2);

if ($resultat > 25 && $resultat < 75){
    echo "La valeur absolue de <b>$random - $random2</b> est comprise entre 25 et 75 <br />";
}else {
    echo "La valeur absolue de <b>$random - $random2</b> n'est comprise entre 25 et 75";


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
