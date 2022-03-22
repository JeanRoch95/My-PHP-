
<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
<?php

session_start();
$_SESSION['admin'] = '1';
if ($_SESSION['admin'] !== '1') {
    die('Vous n\'avez pas le droit de supprimer des articles !');
}

$posts = [
    1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
    ['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
    ['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];

unset($posts[$_GET['id']]);


?>

<?php
            include("common/footer.php");
?>