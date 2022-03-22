<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : La boucle for "; //Mettre le nom du titre de la page que vous voulez
?>
<?php

$random = rand(1, 15);
echo "<h2> Voici le cumul des $random premiers nombre (sens inverse): </h2>";
$resultat = 0;
for ($i = $random; $i >= 1; $i--){
    $resultat += $i;
    echo "Etape : ".($random-$i+1)." - resultat = ".$resultat."<br />";
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
