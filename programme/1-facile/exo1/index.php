<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>

*************** Avant permutation *************** <br>


<?php 

    $a= 3;
    $b = 5;
    $c = 7;
    echo "<p>";
    echo 'A : '. $a."<br />";
    echo 'B : '. $b."<br />";
    echo 'C : '. $c."<br />";
    echo "</p>";

?>


*************** Après permutation ***************

<?php

$tmp = $a;
$a = $b;
$b= $c;
$c = $tmp;


echo "<p>";
echo 'A : '. $a."<br />";
echo 'B : '. $b."<br />";
echo 'C : '. $c."<br />";
echo "</p>";


?>





<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
