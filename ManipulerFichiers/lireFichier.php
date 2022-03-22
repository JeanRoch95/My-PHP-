<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

    <h1>Lire un fichier</h1>
    <?php

    // Créer une ressource
    $ressource = fopen('fichier.txt', 'r');
    // Lire la ressource
    if ($ressource) {
        // Lorsque que nous seront a la derniere ligne de notre fichier buffer sera egale a 0.
        while (($buffer = fgets($ressource)) !== false){
            echo $buffer."<br />";
        }
        // Fermer la ressource
            fclose($ressource);
    }

    $section = file_get_contents('fichier.txt');
    var_dump($section);

    ?>
    <h2>Exercice d'application Studi</h2>

    <?php

        function getUserFromFile(string $fichier): ?array {
            $users = [];

            if (!is_file($fichier)){
                return null;
            }
            $ressource = fopen($fichier, 'r');

            if (!$ressource) {
                return null;
            }
                while (($user = fgets($ressource)) !== false){
                    $users[] = trim($user);
                }
            
            fclose($ressource);
             return $users;

        }
        var_dump(getUserFromFile('fichier1.txt'));

        
    ?>
<?php
            include("common/footer.php");
?>