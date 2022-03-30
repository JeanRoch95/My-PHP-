<?php
        include("common/header.php");
        include("common/menu.php");
        ?>
    <h1>Les méthodes</h1>

<?php

    class user {
        public string $civility;
        public string $surname;
        public string $name;

        public function sayHello(): void
        {
            echo 'Bonjour '.$this->civility. ' ' .$this->name. ' ' .$this->surname;
        }
    }
    $user1 = new User();
    $user1->name = 'Jean-Roch';
    $user1->surname = 'TOMASO';
    $user1->civility = 'Mr';

    $user1->sayHello();





?>
    <h1>Exercice d'application studi</h1>

<?php

class Moto {
    public string $brand;
    public string $color;
    public float $speed;

    public function sayBrrr(): void
    {
      echo  "Les motos " .$this->brand. " de couleur " .$this->color. " vont a une vitesse maximale de " .$this->speed."<br>";
    }
}
$moto1 = new moto();
$moto2 = new moto();
$moto1->brand = 'Yamaha';
$moto1->color = 'rouge';
$moto1->speed = 210;
$moto2->brand = 'Suzuki';
$moto2->color = 'Bleu';
$moto2->speed = 210;

$moto1->sayBrrr();
$moto2->sayBrrr();

?>
<?php
            include("common/footer.php");
?>