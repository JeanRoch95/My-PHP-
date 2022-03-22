<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°9</h1>
<h2>Selection du personnage</h2>

<form action="#" method="POST">
    <label for="perso">Personnage</label>
    <select name="perso" id="perso" onChange = "submit()">
    <option value="jeanroch" <?php if(isset($_POST['perso']) && $_POST['perso'] == 'jeanroch') echo "selected" ?>>Jean-Roch</option>
    <option value="benja" <?php if(isset($_POST['perso']) && $_POST['perso'] == 'benja') echo "selected" ?>>Benjamin</option>
    <option value="laurie" <?php if(isset($_POST['perso']) && $_POST['perso'] == 'laurie') echo "selected" ?>>Laurie</option>
    </select>

</form>

<?php

    $jeanroch = [
        "Nom" => "Jean-Roch",
        "Age" => 26,
        "Sexe" => "Homme",
        "Force" => 2,
        "Agilité" => 7
    ];
    $benja = [
        "Nom" => "Benjamin",
        "Age" => 35,
        "Sexe" => "Homme",
        "Force" => 10,
        "Agilité" => 5
    ];
    $laurie = [
        "Nom" => "Laurie",
        "Age" => 37,
        "Sexe" => "Femme",
        "Force" => 0,
        "Agilité" => 2
    ];

    
    

    if(isset($_POST['perso'])){
        if ($_POST['perso'] === 'jeanroch'){
           ?>
        <div class="box">
            <div class="gauche">
                <img src='player.png' alt='homme'
            </div>
            <div class="droite">
                <?php
                afficherPerso($jeanroch);
                ?>
            </div>
        </div>
            <?php
        } else if ($_POST['perso'] === 'benja') {
            echo '<div class="box">';
            echo '<div class="gauche">';
            echo "<img src='playerM.png' alt='homme'";
            echo '</div>';
            echo '<div class="droite">';
            afficherPerso($benja);
            echo '</div>';
            echo '</div>';
        } else if ($_POST['perso'] === 'laurie'){
            echo '<div class="box">';
            echo '<div class="gauche">';
            echo "<img src='playerF.png' alt='homme'";
            echo '</div>';
            echo '<div class="droite">';
            afficherPerso($laurie);
            echo '</div>';
            echo '</div>';
        }
    }

    function afficherPerso($personnage){
       
        foreach($personnage as $index => $valeur){
            echo $index." : ".$valeur."<br />";
        }
       
        // echo "Nom : ".$personnage['0']."<br />";
        // echo "Age : ".$personnage[1]."<br />";
        // if ($personnage[2]){
        //     echo "Sexe : Homme <br />";
        // } else {
        //     echo "Sexe : Femme <br />";
        // }
        // echo "Force : ".$personnage[3]."<br />";
        // echo "Agilité : ".$personnage[4]."<br />";
    }

?>

<?php
            include("common/footer.php");
?>