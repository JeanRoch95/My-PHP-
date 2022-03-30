<?php
include("common/header.php");
include("common/menu.php");
?>
<h1>Les constructeurs / destructeurs</h1>

<?php

    class User {
        public string $civility;
        public string $username;
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
        public function __destruct()
        {
            echo "Au revoir ".$this->civility. ' ' .$this->name. ' ' .$this->surname;
        }
    }

    $user1 = new User('M', 'Doe', 'John');
    $user2 = new User( 'Mme','Dupont', 'Laure');

    $user1->sayHello();
    echo "<br>";
    unset($user1);
    echo "<br>";
    $user2->sayHello();
    echo "<br>";
    unset($user2);

?>
<h1>Exercice d'application Studi</h1>

<?php

class Moto {
    public string $brand;
    public string $color;
    public float $speed;

    public function __construct(string $brand, string $color, float $speed)
    {
        $this -> brand = $brand;
        $this -> color = $color;
        $this -> speed = $speed;
    }

    public function sayBrrr(): void
    {
        echo  "Les motos " .$this->brand. " de couleur " .$this->color. " vont a une vitesse maximale de " .$this->speed."Km/h<br>";
    }

    public function __destruct()
    {
        echo "La " .$this->brand. ' ' .$this->color. " rentre au garage <br>";
    }
}
$moto1 = new moto("Honda", 'rouge', '10');
$moto2 = new moto('Suzuki', 'bleu', '1000');


$moto1->sayBrrr();
unset($moto1);
$moto2->sayBrrr();
?>
<?php
include("common/footer.php");
?>