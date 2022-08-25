<?php
	//Etapes 1:
	//1- Créer la table des articles dans phpmyadmin.DONE
	//2- Ajouter des articles. DONE
	//3- Afficher les article:

	//3.1- Se connecter la DB
	$serverName = 'localhost';
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "oop8";
	$dbConnect = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);

	//3.2- Envoyer une requete pour selectionner tous les articles
	$getArticlesQuery = 'SELECT * FROM articles';
	$getArticlesRequest = mysqli_query($dbConnect, $getArticlesQuery);
	$articles = mysqli_fetch_all($getArticlesRequest, MYSQLI_ASSOC);

	//3.3- Afficher les articles.
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les articles</title>
</head>

<body>
    <h1>Articles</h1>
    <?php
    	foreach ($articles as $key => $article) {
    		echo '
                <section>
                <h2>' . $article['title'] . '</h2>
                <p>' . $article['content'] . '</p>
                </section>
            ';
    	}
    ?>
</body>

</html>