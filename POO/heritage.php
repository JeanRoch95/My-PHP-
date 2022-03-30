<?php
include("common/header.php");
include("common/menu.php");
?>

<h1>L'héritage</h1>
<p>Le principe est de créer une classe mère qui va contenir des propriétés et des méthodes de base. Vient ensuite la seconde étape : définir des classes filles qui étendent cette classe mère et qui, par conséquent, vont hériter de ses propriétés et méthodes.</p>
<p>Depuis une classe fille, il sera donc possible d'utiliser les méthodes d'une classe mère, mais aussi de modifier son comportement.

    Le meilleur exemple d'héritage, c'est vous : vous avez hérité de certaines caractéristiques de vos parents, mais d'autres ont été modifiées pour faire de vous un être unique. On peut imaginer que vos yeux ont la même couleur que ceux de votre mère, mais que leur forme est complètement différente.</p>
<?php

require_once 'classes/Users.php';
require_once 'classes/Seller.php';

function displayUsername(Users $user): void
{
    echo "Connecté en tant que ". $user->getDisplayName();
}


$user = new Users('Jean-Roch', 'Jeanroch.t@outlook.fr');
$seller = new Seller('Laure', 'Laure.daly@web.fr', 'StuartInc');

echo $user->getDisplayName();
echo '<br>';
echo $seller->getDisplayName();
?>

<p>En faisant cela, notre Seller hérite de toutes les propriétés et méthodes de notre User. User est la classe mère et Seller est la classe fille. Ainsi, même si elle n'est pas explicitement visible dans le code de la classe Seller, il est possible d'appeler la méthode getDisplayedName.</p>

<h1>Exercice d'application</h1>

<?php

require_once 'classes/ElectricCar.php';
require_once 'classes/GasolineCar.php';

$tesla = new ElectricCar('50000', 'Tesla', '560');
$audi = new GasolineCar('50000', 'Audi', '100');

echo $tesla->displayCar().' et a une autonomy moyenne de '.$tesla->autonomy.' Km.';
echo '<br>';
echo $audi->displayCar().' et rejette : '.$audi->rejetCo2.' g/co2 par KM';

?>
<?php
include("common/footer.php");
?>