

    <?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
    
        <h1 class="hello">Coucou</h1>
    <form action="form.php" method="GET">
        <fieldset>
        <legend>Information</legend>
        <label for="nom">Nom : </label>    
        <input type="text" name="nom" id="nom" required>

        <label for="age">Age : </label>
        <input type="number" name="age" id="age" required><br>
        <label for="check">Case a cocher</label><br>
        <input type="checkbox" name="check[]" value="Football" id="check">FootBall <br>
        <input type="checkbox" name="check[]" value="Volley" id="check">Volley <br>
        <input type="checkbox" name="check[]" value="Hand" id="check">Hand <br>

        <input type="submit" value="Envoyer">

        </fieldset>

    </form>

<?php

    if(isset($_POST["nom"])){
        echo '<div class="form">';
        echo 'Le nom est : '.$_POST["nom"]. '<br />';
        if(isset($_POST['age'])){
            echo "L'age est : ".$_POST['age'];
            
        }
        echo '</div>';
    }
    ?>
    <script src="script.js"></script>

<?php 
    include("common/footer.php")

    ?>