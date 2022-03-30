<?php
include("common/header.php");
include("common/menu.php");
?>

<h1>Exercice final</h1>


<?php

require_once 'classes/Student.php';
require_once 'classes/Course.php';
require_once 'classes/Teacher.php';
require_once 'classes/functions.php';

$french = new Course('Français', 'La langue de Molière');
$computerScience = new Course('Informatique', 'Apprendre à développer des sites internet');
$john = new Student('John', 'Doe', [$french, $computerScience]);
$laure = new Teacher('Laure', 'Dupond', $computerScience);

displayDescription($french);
displayDescription($computerScience);
displayDescription($john);
displayDescription($laure);

?>
<?php
include("common/footer.php");
?>