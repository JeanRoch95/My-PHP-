<?php
include("common/header.php");
include("common/menu.php");
?>

<h1>Exercice final Studi</h1>

<?php

// fichier index.php
include 'classes/Moto.php';
include 'classes/Race.php';
include 'classes/Logger.php';

$logger = new Logger();

$moto1 = new Moto("Yamaha", "rouge", 120);
$moto2 = new Moto("Suzuki", "bleue", 112);

$race = new Race($moto1, $moto2);
$logger->log($race->startRace());
$logger->log($race->getWinner());

unset($logger);

$logger = new Logger();

$moto1 = new Moto("Yamaha", "rouge", 98);
$moto2 = new Moto("Suzuki", "bleue", 164);

$race = new Race($moto1, $moto2);
$logger->log($race->startRace());
$logger->log($race->getWinner());

unset($logger);
?>

<?php
include("common/footer.php");
?>