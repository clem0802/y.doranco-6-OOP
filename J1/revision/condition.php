<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <title>PHP-OOP-2 (conditions)</title>
        <meta name="description" content="PHP-OOP-2 (conditions)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>
        <section>
            <h1>(II) Conditions (JOUR2)</h1>
            <!-- (myPATH) http://localhost/y.doranco-6-OOP/J1/revision/condition.php -->
            <ol>
                <li>
                    <a href="../index.php">(0) Home Page</a>
                </li>
                <li>
                    <a href="type-var.php">(I) Types et Variables</a>
                </li>
            </ol>
        </section>

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

        <?php 
        ?>

        <?php
        ?>

        <?php
            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
        ?>

    </body>
</html>