<?php
include("common/header.php");
include("common/menu.php");
?>

<h1>Une classe : un nouveau type</h1>

<?php

class User {
    public string $civility;
    public string $surname;
    public string $name;

    public function __construct(string $civility, string $surname, string $name)
    {
        $this->civility = $civility;
        $this->surname = $surname;
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo 'Bonjour ' .$this->civility. ' ' .$this->name. ' ' .$this->surname;
    }

}
// Il est possible d'utiliser les classe dans des fonctions en dehors.
function compare(User $user1, User $user2): bool
{
    return $user1->surname === $user2->surname;
}

require_once 'Couple.php';

$user1 = new User('M', 'Doe', 'John');
$user2 = new User( 'Mme','Dupont', 'Laure');

$couple = new Couple($user1, $user2);

var_dump(compare($user1, $user2));
echo "<br>";
var_dump($couple->user1->name);

?>
<h1>Exercice d'application Studi</h1>
<?php

// fichier Moto.php
class Moto
{
    public string $brand;
    public string $color;
    public float $maxSpeed;

    public function __construct(string $brand, string $color, float $maxSpeed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }

    public function getDescription(): string
    {
        return $this->brand.' '.$this->color.' ayant une vitesse maximale de '.$this->maxSpeed.'km/h'.PHP_EOL;
    }

    public function __destruct() {
        echo $this->brand.' '.$this->color.' rentre au garage'.PHP_EOL;
    }
}

require_once 'Race.php';


$moto1 = new moto("Honda", 'rouge', '180');
$moto2 = new moto('Suzuki', 'bleu', '190');

$race = new Race($moto1, $moto2);



echo $race->startRace()->getDescription();
?>
<?php
include("common/footer.php");
?>