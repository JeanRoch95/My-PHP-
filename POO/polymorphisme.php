<?php
include("common/header.php");
include("common/menu.php");
?>

<h1>Le polymorphisme</h1>

<?php

require_once 'classes/Users.php';
require_once 'classes/Seller.php';

function displayUsername(Users $user): void
{
    echo "Connecté en tant que ". $user->getDisplayName();
}


$user = new Users('Jean-Roch', 'Jeanroch.t@outlook.fr');
$seller = new Seller('Laure', 'Laure.daly@web.fr', 'StuartInc');

displayUsername($user);
echo "<br>";
displayUsername($seller);
?>
<h1>Exercice d'application Studi</h1>

<?php

require_once 'classes/ElectricCar.php';
require_once 'classes/GasolineCar.php';

function displayCharacteristics(Car $car): void
{
    echo '<ul>';
        foreach($car->getDisplayCar() as $index => $value){
            echo '<li>'.$index.' : '.$value.'</li>';
        }
    echo '</ul>';
}

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);

var_dump($tesla->getDisplayCar());
var_dump($renault->getDisplayCar());
displayCharacteristics($tesla);
displayCharacteristics($renault);
?>
<?php
include("common/footer.php");
?>