<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Les formulaire & Méthode GET"; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Les formulaire & Méthode GET</h1>

    <form action="#" method:"GET" >
        <label for="name">Pseudo : </label> <br />
        <input type="text" name="name" id="name"><br>

        <label for="age">Age</label><br>
        <input type="text" name="age" id="age"><br><br>

        <input type="submit" value="Valider">
    </form>



    <?php
        if (
            isset($_GET['name']) && !empty($_GET['name']) &&
            isset($_GET['age']) && !empty($_GET['age'])
        )
        {
            echo $_GET['name']. " à ". $_GET["age"]. " ans ";
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
