<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

<h1>Exercice n°5</h1>
<h2>Calculer un moyenne</h2>

<form action="#" method="GET">
    <label for="nombre">Nombre de notes :</label>
    <input type="text" name="nombre" id="nombre">
<input type="submit">

</form>




<?php

    if (isset($_GET['nombre']) && $_GET['nombre'] > 0){

        $nombreNote = 0;
        $nombreNote = $_GET['nombre'];
        ?>


    <form action="#" method="POST">
        <fieldset>
            <legend>Inscrire les notes pour calculer la moyenne
            </legend>


<?php
        for ($i = 1; $i < $nombreNote + 1; $i++){
            echo '<label for="note'.$i.'">Notes'.$i.':</label>';
            echo '<input type="text" name="note'.$i.'" id="note'.$i.'"><br />';        
        }
        echo '<input type="submit">';
        echo '</fieldset>';
        echo  '</form>';

        if (isset($_POST['note1'])){
            $res = 0;
            for ($i = 1; $i <= $nombreNote; $i++){
                $res += $_POST['note'.$i];
            }
            echo "La moyenne est : ".$res / $nombreNote;

        }
    }
?>
        
        

    <?php


    ?>

<?php
            include("common/footer.php");
?>