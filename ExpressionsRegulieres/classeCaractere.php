<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Groupes et alternatives</h1>

<?php

    $password = '123456789 abcdefghijklmnopqrstuvwxyz';
    // $pattern = '/[789lmnop]/';
    $pattern = '/[7-9l-p]/';


    preg_match_all($pattern, $password, $matches);

    var_dump($matches);
    echo "<br>";

    // Exlusion de caractère
    $password = '123456789 abcdefghijklmnopqrstuvwxyz';
    // Exclusion de 7 a 9 et || de l a p
    $pattern = '/[^7-9l-p]/';


    preg_match_all($pattern, $password, $matches);

    var_dump($matches);

    echo '<br>';

    // Les classes génériques
    $password = '123456789 abcdefghijklmnopqrstuvwxyz';
    // Tous les caractère alphanumérique
    $pattern = '/\w/';


    preg_match_all($pattern, $password, $matches);

    var_dump($matches);

?>

    <h2>Exercice d'application Studi</h2>

<?php


$emailAddresses = [
    'john@doe.fr',
    'john@localhost',
    'john+1@localhost',
    '@doe.fr',
    'john@.fr',
];

foreach ($emailAddresses as $emailAddress) {
    if (preg_match('/[\w+]+@\w+(\.\w*)?/', $emailAddress)) {
        echo "$emailAddress est au bon format.<br>";
    } else {
        echo "$emailAddress n'est pas au bon format.<br>";
    }
}

?>


<?php
            include("common/footer.php");
?>