<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°6</h1>
<h2>Selection du personnage</h2>

<form action="#" method="POST">

    <label for="gender">Personnage</label>
    <select name="gender" id="gender">
        <option value="homme" checked="true">Homme</option>
        <option value="femme">Femme</option>
    </select>

    <input type="submit">

</form>

<?php

    if(isset($_POST['gender'])){
        if ($_POST['gender'] === 'homme'){
            echo "<img src='player.png' alt='homme'";
        } else {
            echo "<img src='playerF.png' alt='homme'";
        }
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }

?>

<?php
            include("common/footer.php");
?>
<img src="" alt="">