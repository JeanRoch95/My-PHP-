<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°9</h1>
<h2>Personnages : </h2>


<?php 

$perso = 
[
    [
        "Nom" => "Jean-Roch",
        "img" => "player.png",
        "Age" => 26,
        "Sexe" => true,
        "Force" => 2,
        "Agilité" => 7
    ],
    [
        "Nom" => "Benjamin",
        "img" => "playerM.png",
        "Age" => 35,
        "Sexe" => true,
        "Force" => 10,
        "Agilité" => 5
    ],
    [
        "Nom" => "Laurie",
        "img" => "playerF.png",
        "Age" => 37,
        "Sexe" => false,
        "Force" => 0,
        "Agilité" => 2
    ]
];
    


?>

<?php
            include("common/footer.php");
?>