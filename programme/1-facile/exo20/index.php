<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 20 : Formulaires & Tableaux "; //Mettre le nom du titre de la page que vous voulez
?>  

    <h1>Formulaires & Tableaux</h1>

    <form method="POST" >

        <label for="note1">Note1</label><br>
        <input type="text" name="note1" id="note1"><br><br>
        <label for="note2">Note2</label><br>
        <input type="text" name="note2" id="note2"><br><br>
        <label for="note3">Note3</label><br>
        <input type="text" name="note3" id="note3"><br><br>

        <input type="submit" value="Valider">
    </form>



    <?php
        if (isset($_POST['note1']) && !empty($_POST['note1']) && 
        isset($_POST['note2']) && !empty($_POST['note2']) && 
        isset($_POST['note3']) && !empty($_POST['note3'])){
            $note1 = $_POST['note1'];
            $note2 = $_POST['note2'];
            $note3 = $_POST['note3'];
            $notes = [$note1, $note2, $note3];
            $moyenne = calculerMoyenne($notes);
            echo "<h2> La moyenne des ". count($notes) . " notes est de : ". $moyenne . "</h2>"; 
        }

        function calculerMoyenne($notes){
            $resultat = 0;
            foreach($notes as $note){
                $resultat += $note; 
            }
            return $resultat / count($notes);
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
