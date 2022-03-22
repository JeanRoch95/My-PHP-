<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

    <h1>Les Métadonnées</h1>

    <?php
        // Date de création du fichier
        var_dump(date('c', filectime('fichier4.txt')));

        // Date de modification du fichier
        var_dump(date('c', filemtime('fichier4.txt')));

        // Date de 
        var_dump(date('c', fileatime('fichier4.txt')));

        // Propriétaire du fichier
        var_dump(posix_getpwuid(fileowner('fichier4.txt')));

        // Groupe auquel le fichier appartient
        var_dump(posix_getgrgid(filegroup('fichier4.txt')));

        // Récuperer les droits
        var_dump(substr(sprintf('%o', fileperms('fichier4.txt')), -4));

        // Récupérer taille fichier en octet
        var_dump(filesize('fichier4.txt'))

    ?>

    <h2>Exercice d'application Studi</h2>

    <?php

        function listFiles(string $path): void {
            $path = realpath($path).DIRECTORY_SEPARATOR;
            $elements = scandir($path);

            foreach ($elements as $element){
                echo $element;
                echo ' a été crée le '.date('d/m/Y à H:i:s', filectime($path.$element));
                echo ' a été modifié le '.date('d/m/Y à H:i:s', filemtime($path.$element));
                echo '<br />';
            }
        }

        listFiles('.');

    ?>
<?php
            include("common/footer.php");
?>