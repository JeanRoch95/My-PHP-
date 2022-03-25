

    <?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
<h1>Les expressions régulières</h1>

<?php

    $subject = "Comment chercher une châine dans une autre ?";
    $pattern = "/ch/";

    preg_match_all($pattern, $subject, $matches);

    var_dump($matches);

    echo "<br />";

    $subject = "0123456789";
    $search = '456';
    $pattern = "/$search/";

    if (preg_match($pattern, $subject, $matches)){
        echo "$search est présent dans $subject";
    } else {
        echo "$search n'est pas présent dans $subject";
    }

    echo "<br />";

    $subject = "0123456789";
    $search = '456';
    $pattern = "/$search/";
    $offset = 5;

    if (preg_match($pattern, $subject, $matches, null, $offset)){
        echo "$search est présent dans ". substr($subject, $offset);
    } else {
        echo "$search n'est pas présent dans ". substr($subject, $offset);
    }
?>

    <h2>Exercice d'application Studi</h2>

    <?php

        $subject = "Alice was beginning to get very tired of sitting by her sister on the bank, and of having nothing to do: once or twice she had peeped into the book her sister was reading, but it had no pictures or conversations in it, “and what is the use of a book,” thought Alice “without pictures or conversations?”.";
        $search ="Alice";
        $pattern = "/$search/";

        if (preg_match($pattern, $subject, $matches)){
            echo "$search est présent dans : <br /> $subject";
        } else {
            echo "$search n'est pas présent dans : <br /> $subject";
        }

        echo "<br />";
        $count = preg_match_all($pattern, $subject, $matches);

        echo "Le mot Alice est présent ". $count." fois.";

    ?>

<?php
            include("common/footer.php");
?>
