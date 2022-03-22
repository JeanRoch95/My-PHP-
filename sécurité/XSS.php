<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

    <h1>Exo XSS</h1>

    <form method="POST">
        <label for="">
            Username : 
            <input type="text" name="username">
        </label>
        <input type="submit">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') : ?>

    <ul>
        <p> <?= htmlspecialchars($_POST['username']) ?> </p>
    </ul>

    <?php endif; ?>

<?php
            include("common/footer.php");
?>