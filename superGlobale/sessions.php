<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
    <h1>Les sessions</h1>
        <p>Voir exercice 4 du fichiez EXO 3</p>

        <h2>Exo session de connection</h2>

        <?php
            session_start();
            if (isset($_POST['username'])){
                $_SESSION['username'] = $_POST['username'];
                echo "Bonjour ".$_SESSION['username'];
            }
             else
            ?>
            <form method="POST">
                <input type="text" name="username">
                <button type="submit">Se connecter</button>
            </form>

            <?php
            
            

        ?>
<?php
            include("common/footer.php");
?>