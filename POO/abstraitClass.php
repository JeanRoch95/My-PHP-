<?php
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Les classes abstraites</h1>

<?php

require_once 'classes/Users.php';
require_once 'classes/Seller.php';
require_once 'classes/Company.php';
require_once 'classes/HardDrive.php';
require_once 'classes/Product.php';
require_once 'classes/Book.php';

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

function displayFullPrice(Product $product): void
{
    echo $product->getFullPrice().' $.';
}

$user = new Users('Jean-Roch', 'Jeanroch.t@outlook.fr');
$company = new Company('Stuart inc', '30 rue zozo');
$seller = new Seller('Laure', 'Laure.daly@web.fr', $company);

$hardDrive = new HardDrive('TridentZ', 245, 1, 'G-Skill');

displayFullPrice($hardDrive);

?>

<h1>Exercice d'application Studi</h1>


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

function displayPrice(Car $car): void
{
    echo $car->getFinalPrice().' ('.$car->price.')';
}

require_once 'classes/ElectricCar.php';
require_once 'classes/GasolineCar.php';
require_once 'classes/Car.php';
require_once 'classes/Tire.php';

$tesla = new ElectricCar(50000, 'Tesla', 560);
$renault = new GasolineCar(20000, 'Renault', 121);
$tire = new Tire('205', '55', '32');

displayPrice($tesla);
echo '<br>';
displayPrice($renault);

?>
<?php
            include("common/footer.php");
?>