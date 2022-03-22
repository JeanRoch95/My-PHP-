<?php 
        include("common/header.php");
        include("common/menu.php");

        session_start();
        if(!isset($_SESSION["chiffreAleatoire"])){
            $_SESSION["chiffreAleatoire"] = rand(1, 100);
        }
        ?>

<h1>Exercice n°4</h1>
<h2>Trouvez un nombre choisi par l'ordinateur</h2>


<form action="#" method="POST"> 
    <input type="hidden" name="reinit" value="yes">
    <input type="submit" value="Réinitialiser">
</form>

<form action="#" method="POST"> 

        <label for="number">Quel est le nombre : </label>
        <input type="number" name="number" id="number"><br>

        <input type="submit">
</form>

<?php 

$chiffreAlea = 5;

    if (isset($_POST['reinit']) && $_POST['reinit'] === 'yes'){
        $_SESSION["chiffreAleatoire"] = rand(1, 100);
    }

    $chiffreAlea = $_SESSION['chiffreAleatoire'];
    $compteur = 0;
    if (isset($_POST['number'])){

        $valeur = "";
        $valeur = $_POST['number'];

        switch($valeur){
        case ($valeur < $chiffreAlea) : 
            echo "Le nombre à trouver est plus grand. <br />";
            break;
        case ($valeur > $chiffreAlea) :
            echo "Le nombre à trouver est plus petit. <br />";
            break;
        case ($valeur == $chiffreAlea) :
            echo "Gagnez!!!!! Cliquez sur reinitialiser pour retenter votre chance! ";
            break;
        
                echo $compteur;
    }
    }
	

    

?>

<?php
            include("common/footer.php");
?>