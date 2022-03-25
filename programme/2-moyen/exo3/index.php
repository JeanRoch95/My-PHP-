<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Les tableaux associatifs"; //Mettre le nom du titre de la page que vous voulez
?>



<?php

$animal1 = [
    "nom" => "Mina",
    "age" => 2,
    "type" => "chien"
];

$animal2 = [
    "nom" => "Tya",
    "age" => 7,
    "type" => "chat"
];

$animal3 = [
    "nom" => "Milo",
    "age" => 4,
    "type" => "chat"
];

$animal4 = [
    "nom" => "Hocket",
    "age" => 6,
    "type" => "chien"
];

$pets = [$animal1, $animal2, $animal3, $animal4];

function afficherAnimaux(){

    global $pets;
    echo "----------- <br>";
    foreach($pets as $pet){
        foreach ($pet as $index => $valeur){
            echo $index . " : " . $valeur. "<br>";
        }
        echo "----------- <br>";
    }
}


function afficherType($type){

    global $pets;
    echo "----------- <br>";
    foreach($pets as $pet){
        if ($pet['type'] === $type){
            foreach($pet as $index => $valeur){
                echo $index. " : ". $valeur."<br>";
            }
            echo "------------- <br>";
        }
    }
}


?>

<div>
    <a href="?type=tous" class="btn btn-primary">Tous</a>
    <a href="?type=chiens" class="btn btn-primary">Chiens</a>
    <a href="?type=chats" class="btn btn-primary">Chats</a>
</div>

<?php

    if (isset($_GET['type']) && !empty($_GET['type']) && $_GET['type'] !== 'tous'){
        if ($_GET['type'] === 'chiens'){
            afficherType('chien');
        } else if ($_GET['type'] === 'chats'){
            afficherType('chat');
        }
    } else {
        afficherAnimaux();
    }

?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
