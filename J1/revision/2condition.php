<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP-OOP-2 (conditions)</title>
        <meta name="description" content="PHP-OOP-2 (conditions)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>
        <!-- (myPATH) http://localhost/y.doranco-6-OOP/J1/revision/2condition.php -->
        <?php 
            include_once "../components/navbar.php"; 
        ?>
        
        <!-- TITLE -->
        <section>
            <h1>(II) Conditions (JOUR2)</h1>
            <ol>
                <li>
                    <a href="../index.php">(0) Home Page</a>
                </li>
                <li>
                    <a href="1type-var.php">(I) Types et Variable</a>
                </li>
                <li>
                    <a href="3loop-array.php">(III) Loop</a>
                </li>
            </ol>
        </section>

        <!-- (1) condition IF // (2) condition IF  ELSE -->
        <section>
            <?php
                echo "<h3>(1) condition IF</h3>";
                $isPermis = true;
                if($isPermis){
                    echo "<p>Vous avez le permis</p>";
                    echo "<p>Vous pouvez conduire!</p>";
                }
                echo "<hr>";
            ?>

            <?php
                echo "<h3>(2) condition IF  ELSE</h3>";
                if($isPermis){
                    echo "<p>Vous avez le permis</p>";
                    echo "<p>Vous pouvez conduire!</p>";
                } else{
                    echo "<p>Vous ne pouvez pas conduire!</p>";
                }
                echo "<hr>";
            ?>
        </section>

        <!-- (3) Opérateur de comparaison -->
        <section>
            <?php
                echo "<h3>(3) Opérateur de comparaison</h3>";
                echo "<h6>Égalité des valeurs:</h6>";
                $a = 0;
                $b = 10;
                $isEqual = $a == $b;
                echo "<p>$a == $b</p>";
                var_dump($isEqual);

                echo "<h6>Inégalité des valeurs:</h6>";
                $isNotEqual = $a != $b;
                echo "<p>$a != $b</p>";
                var_dump($isNotEqual);
                echo "<hr>";

                echo "<h6>Supérieur à:</h6>";
                echo "<p>$a >= $b</p>";
                var_dump($a >= $b);
                echo "<p>$a > $b</p>";
                var_dump($a > $b);
                echo "<hr>";

                echo "<h6>Inférieur à:</h6>";
                echo "<p>$a <= $b</p>";
                var_dump($a <= $b);
                echo "<p>$a < $b</p>";
                var_dump($a < $b);
                echo "<hr>";
            ?>
        </section>

        <!-- (4) Exemple d'utilisation -->
        <section>
            <?php 
                echo "<h3>(4) Exemple d'utilisation</h3>";
                $numA = 0;
                $numB = 1;
                if ($numA >= $numB){
                    echo "<p>num A est supérieur à numB</p>";
                } else{
                    echo "<p>num A est inférieur à numB</p>";
                }
                echo "<hr>";
            ?>
        </section>

        <!-- (5) Opérateurs de logique -->
        <section>
            <?php 
                echo "<h3>(5) Opérateurs de logique</h3>";
                echo "<p>opérateur &&</p>";
                $isPermis = true;
                $isMajeur = true;
                if ($isPermis && $isMajeur){
                    echo "<p>Vous pouvez conduire.</p>";
                } else{
                    echo "<p>Vous ne pouvez pas conduire.</p>";
                }
                echo "<hr>";


                echo "<p>opérateur ||</p>";
                $winner1 = false;
                $winner2 = false;
                if ($winner1 || $winner2){
                    echo "<p>Un ou tous les users a gagné</p>";
                } else{
                    echo '<p>Aucun user n\'a gagné</p>';
                }
                echo "<hr>";
            ?>
        </section>

        <!-- (6) EXO -->
        <?php
            echo "<h3>(6) EXO âge</h3>";
            echo "<p>exercie sur les différentes tranches d'âge et le nom associé</p>";
            // Exercice
            // Ecrire un algorithme a partir d’une variable age
            // affiche :
            // - "Poussin" de 6 à 7 ans
            // - "Pupille" de 8 à 9 ans
            // - "Minime" de 10 à 11 ans
            // - "Cadet" après 12 an

            $age = 4;
            if ($age>=6 && $age<=7){
                echo "<p>'Poussin'</p>";
            } else if ($age>=8 && $age<=9){
                echo "<p>'Pupille'</p>";
            } else if ($age>=10 && $age<=11) {
                echo "<p>'Minime'</p>";
            } else if ($age>=12) {
                echo "<p>'Cadet'</p>";
            } else {
                echo "<p>'tranche d'âge introuvable'</p>";
            }
            echo "<hr>";
        ?>

        <!-- (7) Opérateur Ternaire -->
        <?php
            echo "<h3>(7) Opérateur Ternaire</h3>";
            echo "<h6>(condition) ? si vrai : sinon faux</h6>";
            $isPermis = true;
            echo $isPermis ? "Vous pouvez conduire" : "Vous ne pouvez pas conduire!";
            echo "<hr>";

        ?>

        <!-- (8) SWITCH (DATE) -->
        <?php
            echo "<h3>(8) Switch (DATE)</h3>";
            // Exercice

            // survoler sur le mot date, et on aura tous les noms
            $day = date('N'); // 1-2-3-4-5-6-7
            // $day = date('D'); // Mon Tue Wed Thurs Fri... 
            // $day = date('d'); // 1-2-3-4-5... 31
            // $day = date('r'); // date complète
            var_dump($day);
            switch ($day) {
                case 1:
                    echo '<pLundi</p>';
                    break;
                case 2:
                    echo '<p>Mardi</p>';
                    break;
                case 3:
                    echo '<p>Mercredi</p>';
                    break;
                case 4:
                    echo '<p>Jeudi</p>';
                    break;
                case 5:
                    echo '<p>Vendredi</p>';
                    break;
                case 6:
                    // echo '<p>Samedi</p>';
                    // break;
                case 7:
                    echo '<p>Dimanche</p>';
                    break;
                default:
                    echo '<p>jour inconnu</p>';
            }
            echo "<hr>";


            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
        ?>

    </body>
</html>