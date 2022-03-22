<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
        <h1>Depassement des données</h1>
<?php
//       $count = $_GET['count'] ?? 5;
//       $count = isset($_GET['count']) ? $_GET['count'] : 5;
//        $count = is_numeric($_GET['count']) ? $_GET['count'] : 10;
//        $count = in_array($count, [10, 20, 50]) ? $count : 10 ;
//for ($i = 0; $i < $count; $i++) {
//    echo 'Item n°'.$i.'<br>';
//}
?>

<?php

$posts = [
	1 => ['title' => 'Comment sécuriser mon application ?', 'createdAt' => new \DateTime('2020-04-06')],
	['title' => 'Comment récupérer un paramètre de mon URL ?', 'createdAt' => new \DateTime('2020-03-12')],
	['title' => 'Comment récupérer le contenu de mon formulaire ?', 'createdAt' => new \DateTime('2020-02-04')],
];

// 1
if (!ctype_digit($_GET['id']) || $_GET['id'] <= 0) {
    die('Une erreur est survenue. Merci de réessayer.');
}

$id = (int) $_GET['id'];

// 2
if (!isset($posts[$id])) {
    die('Une erreur est survenue. Merci de réessayer.');
}

$post = $posts[$id];

echo 'L\'article "'.$post['title'].'" a été publié le '.$post['createdAt']->format('d/m/Y').'.';

?>
<?php
            include("common/footer.php");
?>