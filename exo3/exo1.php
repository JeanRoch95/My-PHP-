<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°1</h1>
<h2>Les tables de multiplications</h2>
<form action="#" method="get">  
        <label for="table">Entrez un nombre</label>
        <input type="number" name="table" id="table">

        <input type="submit">
</form>

<?php 
        if(isset($_GET['table'])){
                $number = $_GET['table'];
        }

?>
<div class='table'>
<div>
<?php 


        if(isset($_GET['table'])){
                for($i = 0; $i <= 9; $i++){
                $resultat =  $i * $number;
                echo "<p class=number>".$i." * ".$number." = ".$resultat."</p>";
        }
        } else {
                echo 'Veuillez ecrire un multiplicateur.';
        }
        



?>
</div>

</div>

<?php
            include("common/footer.php");
?>