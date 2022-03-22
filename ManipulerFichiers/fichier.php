<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

    <?php

        var_dump(is_file('./fichier.txt'));
        $ressource = (fopen('fichier.txt', 'r'));
        var_dump($ressource);
        $result = fclose($ressource);
        var_dump($result);
        var_dump($ressource);

    ?>
        <h2>Exercice d'application</h2>

        <?php
            
            function openFile(string $file) {
                if (!is_file($file)){
                    return false;
                } else {
                    return fopen($file);
                }
            }

            function closeFile(string $resource){
                // Is ressource vérifie que le fichier est bien ouvert.
                if (!is_resource($resource)){
                    return false;
                } else {
                    return fclose($resource);
                }
            }

        ?>

<?php
            include("common/footer.php");
?>