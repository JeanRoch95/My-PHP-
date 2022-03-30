<?php
include("common/header.php");
include("common/menu.php");
?>
<h1>Les interfaces</h1>

<?php

require_once 'classes/Users.php';
require_once 'classes/Seller.php';
require_once 'classes/Company.php';

function displayUsername(Users $user): void
{
    echo "Connecté en tant que ". $user->getDisplayName();
}

function displayToolTip(Tooltipable $tooltipable): void
{
    echo '<div>
<h3>' .$tooltipable->getTittle().'</h3>
<p>'.$tooltipable->getDescription().'</p>
</div>';
}


$user = new Users('Jean-Roch', 'Jeanroch.t@outlook.fr');
$company = new Company('Stuart inc', '30 rue zozo');
$seller = new Seller('Laure', 'Laure.daly@web.fr', $company);


displayToolTip($company);
displayToolTip($user);
displayToolTip($seller);

?>
<h1>Exercice d'application Studi reprise du sujet des voitures.</h1>

<?php
require_once 'classes/CharacteristicsDisplayable.php';

function displayCharacteristics(CharacteristicsDisplayable $characteristicsDisplayable): void
{
    echo '<ul>';
    foreach($characteristicsDisplayable->getDisplayCar() as $index => $value){
        echo '<li>'.$index.' : '.$value.'</li>';
    }
    echo '</ul>';
}

require_once 'classes/ElectricCar.php';
require_once 'classes/GasolineCar.php';
require_once 'classes/Car.php';
require_once 'classes/Tire.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 100);
$tire = new Tire('205', '55', '32');

displayCharacteristics($tesla);
displayCharacteristics($renault);
displayCharacteristics($tire);

?>
<?php
include("common/footer.php");
?>