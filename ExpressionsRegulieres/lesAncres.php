<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Les ancres</h1>
<?php


    $password = '123456789 3456';
    // ^ Permet de rechercher a partir du debut de la chaine, donc ca ne trouve pas
    $pattern = '/^345/';


    preg_match($pattern, $password, $matches);

    var_dump($matches);

    echo "<br>";

    $password = '123456789 3456';
    // $ Permet de rechercher en fin de chaine de caractere.
    $pattern = '/123$/';


    preg_match($pattern, $password, $matches);

    var_dump($matches);

    echo "<br>";

    // Option globale = preg_math_all
    // Option multiligne =>
    // Grace au m il traite chaque ligne indépendemment, il détecte donc 23 en debut ^ de la desieme chaine 
    $password = "123456789\n23456";
    $pattern = '/^23/m';


    preg_match_all($pattern, $password, $matches);

    var_dump($matches);

    echo "<br>";

    // i rend insensible a la casse aA evite d'écrire [A-Za-z]
    $password = "Azerty azerty aZerty";
    $pattern = '/az/i';


    preg_match_all($pattern, $password, $matches);

    var_dump($matches);

    echo "<br>";
?>

<h2>Exercice d'application</h2>

<?php

$emails = [
	'john@doe.fr',
	'john@localhost',
	'john+1@localhost',
	'John+1@localhost',
	'john+1@localhost+1',
	'+1@doe.fr',
	'@doe.fr',
	'john@.fr',
];

foreach ($emails as $email) {
    if (preg_match('/^[a-z][a-z0-9+]*@[a-z]+(\.[a-z]+)?$/i', $email)) {
        echo "$email est au bon format.<br>";
    } else {
        echo "$email n'est pas au bon format.<br>";
    }
}
?>

<h1>Exercice final</h1>

<?php

$urls = [
    'www.google.fr',
    'http://www.google.fr',
    'https://www.google.fr',
    'https://www.google.fr:8080',
    'https://www.google.fr:8080/',
    'localhost',
    'google.fr',
    '://www.google.fr',
    'https://www.google.fr:',
];

foreach ($urls as $url) {
    if (preg_match('/^([a-z]+:\/\/)?[a-z]*(\.[a-z]*){2}(:\d+)?\/?$/i', $url)) {
        echo "$url est au bon format.<br>";
    } else {
        echo "$url n'est pas au bon format.<br>";
    }
}

?>

<?php
            include("common/footer.php");
?>