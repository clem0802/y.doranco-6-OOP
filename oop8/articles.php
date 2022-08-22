<?php 
    // Étapes: 
    // (1) créer la table dans phpMyAdmin
    // (2) ajouter des articles
    // (3) Afficher les articles
    // 3.1 se connecter la BDD

    // var_dump($_GET);
    // connexion la BDD
    $serverName = 'localhost';
    $dbUsername= "root";
    $dbPassword = "root";
    $dbName = "oop8";
    $dbConnect = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName); 
    // ci-dessus, mysqli_connect() est une fonction qui a 4 paramètres
    // var_dump($dbConnect);

    // 3.2 envoyer une requête pour sélectionner tous les articles
    $getArticlesQuery = 'SELECT * FROM articles';
    $getArticlesRequest = mysqli_query($dbConnect, $getArticlesQuery);
    $articles = mysqli_fetch_all($getArticlesRequest, MYSQLI_ASSOC);
    // var_dump($articles);  // pour véirifer

    // 3.3 afficher les articles
?>

<!-- (myPATH) http://localhost/y.doranco-6-OOP/oop8/articles.php -->



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Les articles</title>
        <meta name="description" content="PHP-OOP8-articles">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>
        <?php 
            include_once "./components/navbar.php"; 
        ?>


        <!-- 3.3 afficher les articles -->
        <h1>Articles</h1>
        <?php 
            foreach($articles as $key => $article){
                echo '
                <section>
                    <h2>' .$article['title'] . '</h2>
                    <p>' .$article['content'] . '</p>
                </section>
                ';
            }
            echo '<br>';
            echo '<br>';
        ?>




    </body>
</html>