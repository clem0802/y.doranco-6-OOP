<?php 
    // connexion la BDD
    $serverName = 'localhost';
    $dbUsername= "root";
    $dbPassword = "root";
    $dbName = "oop8";
    $dbConnect = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName); 
    // ci-dessus, mysqli_connect() est une fonction qui a 4 paramètres
    // var_dump($dbConnect);
?>

<?php 
    // déclarer 1 variable contenant 1 string représentant SQL query (requête)
    $getUserQuery = 'SELECT * FROM users';
    // créer la query SQL avec la connexion à la BDD, et la query
    $getUserRequest = mysqli_query($dbConnect, $getUserQuery);
    // exécuter la query, ça retourne un array de users
    // ce paramètre pour array (tableau) associatif qui est mis dans 1 variable $users
    $users = mysqli_fetch_all($getUserRequest, MYSQLI_ASSOC);
    // var_dump(MYSQLI_ASSOC);
    // var_dump(MYSQLI_BOTH);
    var_dump($users);
?>


<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <link rel="stylesheet" href="./styles/navbar.css"> -->

        <title>PHP-OOP8 (Samy)</title>
        <meta name="description" content="PHP-OOP8">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>

        <?php 
            include_once "./components/navbar.php"; 
        ?>
        <h1>PHP-OOP8 (le 8 août) (Samy)</h1>
        <!-- (myPATH) http://localhost/y.doranco-6-OOP/oop8/index.php -->


        <form>
            <input type="text" name="nom" placeholder="Entrez votre nom:">
            <br />
            <button name="selectFruits" value="SelectFruit">Valider</button>
        </form>

        <?php
            $exemple = "exemple";
            var_dump($GLOBALS['_GET']);

            if (isset($GLOBALS['_GET']['nom'])) {
                echo '<h2>' . $GLOBALS['_GET']['nom'] . '</h2>';
            }
            echo '<hr>';
        ?>

        <!-- loop  over all users' name -->
        <!-- ************************************ -->
        <?php 
            foreach($users as $key => $value){
                echo '
                    <div>
                        <h3>' . $value['nom'] . '</h3>
                    </div>
                ';
            }
            echo '<hr>';
        ?>

        <!-- ************************************ -->
        <label for="choix">Quel sont vos fruits préférés</label>
        <p>
            <?php
                $fruits = ["Fraise", "Pèche", "Poire", 'Pomme', 'Abricot'];
                foreach ($fruits as $key => $fruit) {
                    echo "<input type='checkbox' value=$fruit name=$fruit> $fruit";
                }
            echo '<hr>';
            ?>
        </p>


        <!-- les ÉTAPES -->
        <!-- ************************************ -->
        <!-- CINNEXION à la BDD -->
        <!-- 1.1 Créer la BDD phpmyadmin -->
        <!-- 1.2 récupérer les crédentials -->
        <!-- 1.3 utiliser mysqli_connect(username...) -->
        <!-- EXÉCUTER la requête QUERY SQL -->
        <!-- AFFICHER les données -->




<!-- ********************************************************************************* -->
        <!-- <form>
            <input type="text" name="nom" placeholder="Entrez votre nom:">
            <button>Valider</button>
        </form> -->
<!-- 
        <form>
            <input type="text" name="nom" placeholder="Cliquez sur vos fruits préférés:">
            <label for="choix">Quel sont vos fruits préférés?</label>
                <p>
                    <?php
                        $fruits = ["Fraise", "Pèche", "Poire", 'Pomme', 'Abricot'];
                        foreach ($fruits as $key => $fruit) {
                            echo "<input type='checkbox' value=$fruit name=$fruit> $fruit";
                        }
                    ?>
                </p>
            <button name="selectFruits" value="SelectFruit">Valider</button>
        </form>
        <hr> -->

        <?php
            // echo "<p>Hello World - testing</p>";
            // $exemple = "exemple";
            // var_dump($GLOBALS['_GET']);

            // if(isset($GLOBALS['_GET']['nom'])){
            //     echo '<h2>' . $GLOBALS['_GET']['nom'] . '</h2>'; 
            // }
        ?>

        <!-- SQL commands, sur interface graphique "phpMyAdmin" -->
        <!-- ex: -->
        <!-- SELECT * FROM `users` WHERE nom = "Samy"; -->
        <!-- INSERT INTO users (id, nom) VALUES (NULL, 'Snoopy'); -->
        <!-- INSERT INTO `users` (`id`, `nom`) VALUES (NULL, 'Spierman'); -->
    </body>
</html>



<!-- array(7) 
{ 
    [0]=> array(2) { ["id"]=> string(1) "1" ["nom"]=> string(4) "Samy" } 
    [1]=> array(2) { ["id"]=> string(1) "2" ["nom"]=> string(5) "Gwenn" } 
    [2]=> array(2) { ["id"]=> string(1) "3" ["nom"]=> string(6) "Fatiha" } 
    [3]=> array(2) { ["id"]=> string(1) "4" ["nom"]=> string(6) "Snoopy" } 
    [4]=> array(2) { ["id"]=> string(1) "5" ["nom"]=> string(9) "PawPatrol" } 
    [5]=> array(2) { ["id"]=> string(1) "6" ["nom"]=> string(6) "Tintin" } 
    [6]=> array(2) { ["id"]=> string(1) "7" ["nom"]=> string(7) "Ironman" }
} -->