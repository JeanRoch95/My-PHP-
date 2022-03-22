<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>


    <h1>Ecrire dans les fichiers</h1>
        
    <?php
        // Création et ouverture en ecriture du fichier qui n'existe pas
        $ressource = fopen('fichier4.txt', 'w');

        // Ecriture dans le fichier
        fwrite($ressource, 'Hello');
        fwrite($ressource, 'World');
        fwrite($ressource, '!');

        // Fermeture de la ressource ( ne pas oublier cette étape )

        fclose($ressource);

        var_dump(file_get_contents('fichier4.txt'));

        // Desieme solution d'écriture dans un fichier

        $ressource = file_put_contents('fichier4.txt', 'Hello World !', FILE_APPEND);

        var_dump(file_get_contents('fichier4.txt'));

    ?>

    <h2>Exercice d'application ecrire dans un fichier</h2>

    <?php

        $users = [
            ['Mathilde', 'Dubois'],
            ['Eric', 'Blanchar'],
            ['Manon', 'Dupont'],
        ];

        function writeUserInFile(string $file, array $users): bool {

            $ressource = fopen($file, 'w');

            if (!$ressource) {
                return false;
            }

            foreach($users as $user){
                fwrite($ressource, implode(' ', $user).PHP_EOL);
            }

            fclose($ressource);
            return true;
        }

        writeUserInFile('fichier5.txt', $users);

    ?>
    
<?php
            include("common/footer.php");
?>