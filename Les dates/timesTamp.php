<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Le Timestamp Unix</h1>
            <p>Le timestamp est le nombre de seconde qui c'est écoulé depuis le 1er Janviers 1970 a minuit au format UTC</p>
        <?php
            $timestamp = 1898085165;
            $timestamp2 = 1898336292;
            $timestamp3 = 1898345432;

            var_dump($timestamp < $timestamp2);

            // Trier les dates par odre dans un tableau
            $dateArray = [$timestamp2, $timestamp, $timestamp3];
            sort($dateArray);
            var_dump($dateArray)

            ?>

            <h2>Exercice</h2>

        <?php



$timestamps = [1654863436, 1407673368, 1581337036, 1644495436, 1399724236, 1586521368, 1628598168];

$comparisonTimestamp = 1586521036;

        $comparisonTimestamp = function ($timestamps) use ($comparisonTimestamp){
            return $timestamps <= $comparisonTimestamp;
        };

        print_r(array_filter($timestamps, $comparisonTimestamp));
        ?>

        <h2>Le timeStamp en PHP</h2>
        <?php
        echo time();
        echo "<br />Micro time ". microtime();
        echo "<br />Micro time avec boolen ". microtime(true);
        echo "<br />Micro time avec boolen true affiche les seconde en flottant"
        ?>
        <h2>Calcul de temps d'execution de srcipt par différence de timestamp</h2>
        <?php
        $microtimeBefore = microtime(true);
        echo "Bonjour! <br />";
        $microtimeAfter = microtime(true);

        echo $microtimeAfter - $microtimeBefore;
        ?>

        <h2>Fonction mktime</h2>

        <?php
            $heure = 13;
            $minute = 56;
            $seconde = 12;
            $mois = 3;
            $jour = 21;
            $annee = 2031;

           echo mktime($heure, $minute, $seconde, $mois, $jour, $annee)
        ?>
        <p>Elle prends 6 paramaitre dans cet ordre : heure, minute, seconde, mois, jours, année</p>
        <p>Tous les paramaitre son optionnel mais ont peux ommetre les paramaitre a partir de la fin</p>

        <h2>Exercice</h2>

        <?php

            $heure = 0;
            $minute = 41;
            $seconde = 0;
            $mois = 12;
            $jours = 21;
            $annee = 2012;

            echo mktime($heure, $minute, $seconde, $mois, $jour, $annee);

            echo "<p> Aujourd'hui a minuit</p><br />";

            echo mktime(0,0,0)."<br />";

            echo "<p>Il y a 1h </p><br />";

            echo mktime(-1)."<br />";

            echo "<p> Calcul temps d'exécution <br /></p>";

            $tempsAvantexécution = microtime(true);

            $result = 1;
            for ($i = 1; $i <= 10000000; $i++){
                $result = $i * $result;
            }

            $tempsApresExecution = microtime(true);

            echo $ecartTeam = $tempsApresExecution - $tempsAvantexécution;

        ?>
        <h2>Afficher le timestamp a l'utilisateur</h2>

        <?php

            $heure = 0;
            $minute = 41;
            $seconde = 0;
            $mois = 12;
            $jours = 21;
            $annee = 2012;

            $time =  mktime($heure, $minute, $seconde, $mois, $jour, $annee);

            echo date('W', $time)
        
        ?>

        <h2>Exercice affichage date</h2>

        <?php

            echo "Nous somme en semaine ".date('W')."<br />";

            echo 'La date du jours au format ISO 8601 est : '.date('c', mktime(0,0,0))."<br />";

            $nextXmas = mktime(0, 0, 0, 12, 25, date('Y') + 1);
            
            echo 'Le 25 décembre '.date('Y', $nextXmas). ' Nous seront un '.date('l', $nextXmas);


        ?>

        <h1>Exercice final</h1>

        <?php

            $currentMonth = (int) date('m');
            $currentYear = (int) date('y');
            $numberDayInMonth = (int) date('t');
            $firstDayOfMonth = (int) date('N', mktime(0, 0, 0, $currentMonth, 1, $currentYear))

        ?>
        <table>
            <caption><?php echo date('m/Y') ?></caption>
            <thead><tr><th>L</th><th>M</th><th>M</th><th>J</th><th>V</th><th>S</th><th>D</th></tr></thead>
            <tbody>
                <tr>
                    <?php
                        if (1 !== $firstDayOfMonth){
                            echo '<td coldspan="' .($firstDayOfMonth - 1). '"></td>';
                        }

                        for ($i = 1; $i <= $numberDayInMonth; $i++){
                            echo '<td>'.$i.'</td>';

                            if ((int) date('N', mktime(0, 0, 0, $currentMonth, $i, $currentYear)) === 7){
                                echo '</tr><tr>';
                            }
                        }

                        $dayLeft = ($numberDayInMonth + $firstDayOfMonth) % 7;
                        if (0 !== $dayLeft){
                            echo '<td coldspan="' .((7 - $dayLeft) + 1) . '"></td>';
                        }
                    ?>
                </tr>
            </tbody>
        </table>
<?php
            include("common/footer.php");
?>