<?php 
        include("common/header.php");
        include("common/menu.php");
        ?>

        <h1>Quantificateurs</h1>

        <?php

            $subject = 'zerty azerty aazerty aaazerty aaaazerty';

            // De 0 a 1 a  
            $pattern = '/a{0,1}zerty/';
            preg_match_all($pattern, $subject, $matches);
            var_dump($matches);

            echo "<br />";
            // Ommêtre le paramaitre pour une infinité d'occurence a partir de 1
            $pattern = '/a{1,}zerty/';
            preg_match_all($pattern, $subject, $matches);
            var_dump($matches);

            echo "<br />";

            $pattern = '/a{0,}zerty/';
            preg_match_all($pattern, $subject, $matches);
            var_dump($matches);

            echo "<br />";

            $pattern = '/a{2,4}zerty/';
            preg_match_all($pattern, $subject, $matches);
            var_dump($matches);

            echo "<br />";

            // IL y a seulement 2 a
            $pattern = '/a{2}zerty/';
            preg_match_all($pattern, $subject, $matches);
            var_dump($matches);

            echo "<br />";

            // Permet de rendre az devient facultatif.
            $subject = 'azazerty';
            $pattern = '/(az)?azerty/';

            preg_match_all($pattern, $subject, $matches);

            var_dump($matches);

        ?>

        <h2>Exercice d'application Studi</h2>

        <?php

            $phoneNumbers = [
                '0102030405',
                '0112030405',
                '01 02 03 04 05',
                '1102030405',
                '01.02.03.04.05',
            ];

            foreach($phoneNumbers as $number){
                if (preg_match('/0(1|2|3|4|5|6|7|8|9|0)( ?((0|1|2|3|4|5|6|7|8|9|0)(0|1|2|3|4|5|6|7|8|9|0))){4}/', $number)){
                    echo "$number est au bon format.".PHP_EOL;
                } else {
                    echo "$number n'est pas au bon format.".PHP_EOL;
                }
            }

        ?>
<?php
            include("common/footer.php");
?>