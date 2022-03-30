<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Utiliser la documentation</h1>
        <h2>Bonnes pratiques</h2>
        <p>utiliser les fonctions interne à PHP</p>
<?php

        var_dump(explode(' ','Bonjour à tous ! Comment allez vous ?'));


?>

<p>La fonction money_format est devenue obsolète a partir de la version 8.0.0 de PHP</p>
<p>Elle a était remplacé par NumberFormatter::formatCurrency</p>
<p>Cette fonction est uniquement définie si le système a les capacités strfmon</p>


<?php
            include("common/footer.php");
?>