<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°2</h1>
<h2>La Pyramide</h2>


<form action="#" method="POST">  
        <label for="hauteur">Hauteur de la Pyramide</label>
        <input type="number" name="hauteur" id="hauteur">

        <input type="submit">
</form>
        
<?php 

    if(isset($_POST['hauteur']) && $_POST['hauteur'] > 0){
        $hauteur = $_POST['hauteur'];
        echo "<h2> La hauteur est  : ". $hauteur."</h2><br />";
        $txt="";
        for($i = 0; $i < $hauteur; $i++){
            $txt .= "xx";
            echo $txt. '<br />';
        }
        for($i = 0; $i < $hauteur-1; $i++){
            $txt = substr($txt, 0,strlen($txt)-2);
            echo $txt. '<br />';

        }
    } else {
        echo "<h2> Veuillez saisir une valeur dans le champ ci-dessus</h2>";
    }

    ?>

<?php
            include("common/footer.php");
?>