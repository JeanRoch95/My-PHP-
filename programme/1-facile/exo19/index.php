<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 19 : Les formulaire & Méthode POST"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Les formulaire & Méthode POST</h1>

    <form action="" method = "POST" >

        <label for="number">Nombre</label><br>
        <input type="number" name="number" id="number"><br><br>

        <input type="submit" value="Valider">
    </form>



    <?php
    if (isset($_POST['number']) && !empty($_POST["number"])){
        $variable = $_POST["number"];
        if ($variable % 2 !== 0){
            echo "Le chiffre saisi est impair";
        } else {
            echo "Le chiffre saisi est pair";
        }
    }
    ?>
   
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
