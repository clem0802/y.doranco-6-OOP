<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP-OOP-1 (types & variables)</title>
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>

        <h1>PHP-OOP-1 (types & variables)</h1>
        <!-- (myPATH) http://localhost/y.doranco-6-OOP/J1/revision/type_var.php -->

        <?php
            // Ajouter du texte dans le fichier HTML final 
            echo "<span>Hello: Types & Variables</span><br>";

            // Déclarer-Définir une variable nommée hello qui possède un type STRING
            $hello = "Salut! Je suis un script PHP!";

            // Afficher dans notre fichier la valeur de la variable hello
            echo $hello;

            // Concaténer 3 chaînes de caractères pour en faire une seule
            echo '<h3>' . $hello . " " . "Samy :)" . '</h3>';

            // Les double guillemets permettent de directement lire la valeur d'une variable sans concaténation
            echo "<h6>$hello</h6>";

            echo "<hr>";
            echo '<p>' . "Samy" . " " . $hello . '</p>';
            echo '<p>' . $hello . '</p>';

            // Réaffecter une variable
            $hello = "On peut réaffecter une nouvelle valeur à une variable";
            // la valeur de la variable hello a changé
            echo "<p>$hello</p>";
        ?>
            

        <?php
            // EXO 1
            // Déclarer deux variables: nom et prenom
            $nom = "TAN";
            $prenom = "Clémence";
            // Afficher la phrase: Salut, (nom) (prenom), comment allez-vous? 
            echo '<p>' . $nom . " " . $prenom . " " . ", comment allez-vous?";
            echo "<p> $nom $prenom, comment allez-vous?";

            $name = 'idomar';
            $firstname = 'fatiha';
            echo '<p>' . $name . " " . $firstname . " " . ", comment allez-vous?";
            echo "<hr>";


            // les nombres / Numbers
            $count = 12;
            $pi = 3.14;
            $countPlusCinq = $count + 10;
            $countPlusPi = $count + $pi;
            
            // on utilise le var_dump() pour avoir de l'info sur une variable
            var_dump($count); echo "<br>";
            var_dump($pi); echo "<br>";
            var_dump($prenom); echo "<br>";
            echo "<p>$countPlusCinq</p>";
            echo "<p>$countPlusPi</p>";
            echo "<hr>";


            $a = 64;
            $b = 8;
            echo "<p>a = 64</p>";
            echo "<p>b = 8</p>";

            echo '<p>Addition: ' . ($a + $b) .'</p>'; // 72
            echo '<p>Soustraction: ' . ($a - $b) .'</p>'; // 56
            echo '<p>Multiplication: ' . ($a * $b) .'</p>'; // 512
            echo '<p>Division: ' . ($a / $b) .'</p>'; // 8
            echo '<p>Modulo: ' . ($a % $b) .'</p>'; // 0
            echo '<p>Puissance: ' . ($a ** $b) .'</p>'; // 281474976710656
            echo '<p>racine carrée: ' . (sqrt($a)) .'</p>'; // 8
            // echo '<p>racine carrée: ' . (cbrt($a)) .'</p>';
            echo "<hr>";


            $nbOeufs = 1; // 1
            $nbOeufs = $nbOeufs + 3; // 4
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            $nbOeufs = $nbOeufs - 1; // 3
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            echo "<hr>";


            // Alternatives:
            $nbOeufs += 5; // 8
            echo "<p>nombre d'oeufs = $nbOeufs</p>";
            $nbOeufs *= 2; // 16
            echo "<p>nombre d'oeufs = $nbOeufs</p>";


            echo "<br>";
            echo "<br>";
            echo "<br>";
            echo "<br>";
        ?>

        <?php
        ?>

        <?php
        ?>

        <?php
            // error_reporting(-1);
            // echo "<hr>";
            // c'est une fonction qui permet d'afficher les infos sur PHP
            // phpinfo()

            // C:\MAMP\bin\php\php8.0.1/php.exe
            // MEttre en forme document avec
            // configurer le formatteur (par défaut)
            // settings: F5
            // format save
            // COCHER Format On Save
        ?>
    </body>
</html>