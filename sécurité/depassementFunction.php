<?php
  
    function displayList(int $count){
        $html = '';
        $count = in_array($count, [10, 20, 50]) ? $count : 10;
        for ($i = 0; $i < $count; $i++){
            $html .= '<p>Item n° '.$i.'</p>';
        }
            return $html;
    }
    ?>
<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>
        <h1>Depassement des données</h1>

<h1>List on item</h1>



<?php $count = is_numeric($_GET['count']) ? $_GET['count'] : 10;
?>
 <?= displayList($count) ?>


<?php
            include("common/footer.php");
?>