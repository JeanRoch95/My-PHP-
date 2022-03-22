<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°7</h1>
<h2>Les tableaux</h2>

<h3>Etape 1</h3>
<p>Réaliser un tableau contenant les valeurs : 2, 6, 12, 5, 26, 34, 40, 60</p> <br>


<h3>Etape 2</h3>
<p>Réaliser une fonction qui vérifie si un tableau ne contient que des valeurs paires ou non</p><br>


<h3>Etape 3</h3>
<p>Afficher un message pour l'indiquer a l'utilisateur</p><br>



<h3>Résultat :</h3>


<?php

$array = [2, 6, 12, 7, 26, 34, 40, 60];


if(checkTableau($array)){
    echo "Le tableau ne contient que des valeurs paires";
} else {
    echo "Le tableau contient des valeurs impaires";
}

function checkTableau($tableau){
    for($i = 0; $i < count($tableau); $i++){
        if($tableau[$i] % 2 !== 0){
            return false;
        }
    }
    return true;
}
?>

<?php
            include("common/footer.php");
?>