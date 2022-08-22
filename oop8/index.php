<title>PHP-OOP8 (Samy)</title>
<meta name="description" content="PHP-OOP8">
<link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">

<?php 
    var_dump($_GET);
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


<!-- ************************************ -->
<!-- cours oop8 - JOUR 5 -->
<?php
    // Pour les erreurs:
    $nomError = "";
    // teste si l'utilisateur a tapé un nom dans l'input
    if(isset($_GET['nom'])){
        $nom = $_GET['nom'];
        if($nom === ""){
            $nomError = "Le nom ne peut pas être vide!";
        } else {
            $addUserQuery = "INSERT INTO users (nom) VALUE ('$nom')";
            $addUserRequest = mysqli_query($dbConnect, $addUserQuery);
            header('Location: /y.doranco-6-OOP/oop8/index.php');
        }
    }
    // echo '<script>le nomJS = ' . $nom . '</script>';
?>

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>

        <?php 
            include_once "./components/navbar.php"; 
        ?>
        <h1>PHP-OOP8 (le 8 août) (Samy)</h1>
        <!-- (myPATH) http://localhost/y.doranco-6-OOP/oop8/index.php -->

        <form>
            <input type="text" name="nom" placeholder="Add a new user:">
            <!-- <p>Nom ne peut pas être vaide!</p> -->
            <?php echo "<p>$nomError</p>" ?>
            <?="<p>$nomError</p>"?>
            <br />
            <button type="submit" name="selectFruits" value="SelectFruit">Valider</button>
        </form>


        <!-- ************************************ -->
        <!-- loop  over all users' name -->
        <!-- Samy, Gwenn, Fatiha, Snoopy, PawPatrol, Tintin, Ironman -->
        <?php 
            foreach($users as $key => $value){
                echo '
                    <div>
                        <h3>' . $value['id'] . '</h3>
                        <h3>' . $value['nom'] . '</h3>
                    </div>
                ';
            }
            echo '<hr>';
        ?>


        <?php
            // $exemple = "exemple";
            // var_dump($GLOBALS['_GET']);

            // if (isset($GLOBALS['_GET']['nom'])) {
            //     echo '<h2>' . $GLOBALS['_GET']['nom'] . '</h2>';
            // }
            // echo '<hr>';
        ?>


        <!-- ************************************ -->
        <label for="choix">Quel sont vos fruits préférés?</label>
        <p>
            <?php
                $fruits = ["Fraise", "Pèche", "Poire", 'Pomme', 'Abricot'];
                foreach ($fruits as $key => $fruit) {
                    echo "<input type='checkbox' value=$fruit name=$fruit> $fruit";
                }
                echo '<hr>';
                echo '<br>';
                echo '<br>';
            ?>
        </p>


        <!-- les ÉTAPES -->
        <!-- ************************************ -->
        <!-- CINNEXION à la BDD -->
        <!-- 1.1 Créer la BDD phpMyAdmin -->
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

