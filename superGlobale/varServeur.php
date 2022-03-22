<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>SuperGlobale $_serveur</h1>

        <h2>Récuperer les Variables d'environnement</h2>

        <?php 
        var_dump(getenv());
        ?>

        <h2>3 type de serveurs : </h2>
            <ul>
                <li>Dev</li>
                <li>Preprod</li>
                <li>Prod</li>
            </ul>

        
<?php
            include("common/footer.php");
?>