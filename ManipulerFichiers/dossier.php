<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Manipuler les dossiers</h1>

<?php

    mkdir('repertoire');
    mkdir('exemple/reportoire/recursif', 0755, true);

    $user = ['mathilde', 'nicolas', 'franck'];

    foreach($user as $users){
        if (!is_dir($$users)){
            mkdir(strtolower($users));
        }
    }

    $directories = scandir('.');
    echo $directories;

    foreach($directories as $directorie){
        if ($directory !== '.' && $directory !== '..' && is_dir($directory) && !in_array($directory, $users)){
            rmdir($directorie);
        }
    }

?>
<?php
            include("common/footer.php");
?>