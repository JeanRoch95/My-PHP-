<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>La psr</h1>

        <p>Voir code pour correction de code avec psr 1 et 12.</p>
<?php


class FooBar
{
    PUBLIC const MY_CONST = 0;

    PUBLIC function SampleFunction ($sampleVar)
{
        switch ($sampleVar){
            case 1:
            echo 'Cas n°1';
            break;
        case 2:
            echo 'Cas n°2';
            break;
        default:
            echo 'Cas par défaut';
            break;
        }
    }
}

?>

<?php
            include("common/footer.php");
?>