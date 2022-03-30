<?php
include("common/header.php");
include("common/menu.php");


require_once('classes/personnage.class.php');

$p1 = new Personnage("Luke", 'player.png', '26',Personnage::HOMME, '5', '4');
$p1->afficherMesInformationsTemplate();
echo "<br>--------------------------<br>";
$p2 = new Personnage('Katy', 'playerF.png', '25', Personnage::FEMME, '3', '6');
$p2->afficherMesInformationsTemplate();
echo "<br>--------------------------<br>";
$p3 = new Personnage('Marc', 'playerM.png', '28', Personnage::HOMME, '2', '8');
$p3->afficherMesInformationsTemplate();
?>

<?php
include("common/footer.php");
?>