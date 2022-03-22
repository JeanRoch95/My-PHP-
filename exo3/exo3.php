<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°3</h1>
<h2>Cercle - Périmètre et Aire</h2>


<form action="#" method="POST">  
<br>    
        <div>
        <label for="rayon">Rayon d'un cercle :</label>
        <input type="number" name="rayon" id="rayon">
        </div>
        <div>
        <label for="perimetre">Périmètre</label>
        <input type="checkbox" name="perimetre" id="perimetre" checked="true">
        </div>
        </div>
        <label for="aire">Aire</label>
        <input type="checkbox" name="aire" id="aire" checked="true">
        <div>
        <br>
        <input type="submit">
</form>

<?php 

    if (isset($_POST['rayon']) && $_POST['rayon'] > 0){
        $rayon = $_POST['rayon'];
        echo "<h2> Résultats </h2>";
        switch($rayon){
            case isset($_POST['perimetre']) && !isset($_POST['aire']) :
                echo "<p> Le périmètre d'un cercle de rayon ".$rayon." est : ". 2*pi()*$rayon;
                break;
            case isset($_POST['aire']) && !isset($_POST['perimetre']) :
                echo "<p> L'aire d'un cercle de rayon : ".$rayon." est : ". pi()*$rayon*$rayon;
                break;
            case (isset($_POST['perimetre']) && isset($_POST['aire'])) :
                echo "<p> Le périmètre d'un cercle de rayon ".$rayon." est : ". 2*pi()*$rayon;
                echo "<p> L'aire d'un cercle de rayon : ".$rayon." est : ". pi()*$rayon*$rayon;
                break;
            default : 
                echo "Veuillez saisir une case.";
        }
    }
    
    ?>

<?php
            include("common/footer.php");
            ?>
            <!-- echo "<p> Le périmètre d'un cercle de rayon ".$rayon." est : ". 2*pi()*$rayon;
            echo "<p> L'aire d'un cercle de rayon : ".$rayon." est : ". pi()*$rayon*$rayon; -->