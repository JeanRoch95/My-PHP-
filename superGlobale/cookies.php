<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

    <h1>Les cookies</h1>

    <?php
    setcookie('SITE_LANG', 'fr', time() + 3600);
    // setcookie('SITE_LANG', 'fr', time() - 3600); Permet de supprimer le Cookie

    if ($_COOKIE['SITE_LANG'] === 'fr'){
        echo '<h2> Bonjour en francais </h2>';
    } else {
        echo '<h2> Welcome in English </h2>';
    }
    ?>
    <h1>Exercice</h1>

    <p>Déclarez un cookie permettant de stocker la date de dernière mise à jour du panier pour un site marchand. Ce cookie aura une validité de 3h.</p>

    <?php
        // setcookie('IS_VALID', date('d/m/y h:i:s'), time() + 10800); Cr&ation du cookie

        if ($_COOKIE['IS_VALID'] === true){
            echo 'Derniere mise a jour du panier';
        } else {
            echo 'Panier vide';
        }

        setcookie('IS_VALID', '', time() - 10800);

    ?>

<?php
            include("common/footer.php");
?>