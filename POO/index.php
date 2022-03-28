

    <?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
<h1>Bienvenue le site d'exercice en PHP de Jean-Roch</h1>

<?php

require_once 'classes/User.php';

$user1 = new User();
$user2 = new User();
$user1->name = 'John';
$user1->surname = 'Doe';
$user2->surname = 'Dupont';
$user2->name = 'Laure';

echo $user1->name. ' ' .$user1->surname;
echo "<br>";
echo $user2->name. ' ' .$user2->surname;


?>

    <h1>Exercice d'application Studi</h1>
    <?php

        class Moto {
            public string $brand;
            public string $color;
            public float $speed;
        }
        $moto1 = new moto();
        $moto2 = new moto();
        $moto1->brand = 'Yamaha';
        $moto1->color = 'rouge';
        $moto1->speed = 210;
        $moto2->brand = 'Suzuki';
        $moto2->color = 'Bleu';
        $moto2->speed = 210;



        echo $moto1->brand. ' de couleur ' .$moto1->color . ' Allant à ' .$moto1->speed. ' Km/h maximum <br>';
        echo $moto2->brand. ' de couleur ' .$moto2->color . ' Allant à ' .$moto2->speed. ' Km/h maximum';


    ?>
<?php
            include("common/footer.php");
?>
