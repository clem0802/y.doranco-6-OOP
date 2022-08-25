<?php
	//Connexion la base de donnée:
	$serverName = 'localhost';
	$dbUsername = "root";
	$dbPassword = "root";
	$dbName = "oop8";
	$dbConnect = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName);
?>

<?php
	//Pour les erreurs:
	$nomError = "";
	//Tester sur si l'utilisateur a tapé un nom dans l'input
	if (isset($_GET['nom'])) {
		$nom = $_GET['nom'];
		if ($nom === "") {
			$nomError = "Le nom ne peut pas etre vide!";
		} else {
			$addUserQuery = "INSERT INTO users (nom) VALUES ('$nom')";
			$addUserRequest = mysqli_query($dbConnect, $addUserQuery);
			header('Location: /oop8/index.php');
		}
	}
?>

<?php
	//On declarer une variable contenant une chaine de caractères representant la requete SQL
	$getUserQuery = 'SELECT * FROM users';

	//Créer la requete SQL avec la connexion a la db, et la requete
	$getUserRequest = mysqli_query($dbConnect, $getUserQuery);

	//Executer la requete SQL, ca retourne un tableau de users:
	$users = mysqli_fetch_all($getUserRequest, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <?php
    	include_once './components/navbar.php';
    ?>
    <h1>OOP 08 aout</h1>

    <form>
        <input type="text" name="nom" placeholder="Entrez votre nom:">
        <?php echo "<p>$nomError</p>" ?>
        <?="<p>$nomError</p>"?>
        <br />
        <button type="submit" name="add">Valider</button>
    </form>

    <?php
    	foreach ($users as $key => $value) {
    		echo '
                <div>
        			<h3>' . $value['nom'] . '</h3>
                </div>
            ';
    	}
    ?>

    <label for="choix">Quel sont vos fruits préférés</label>
    <p>
        <?php
        	$fruits = ["Fraise", "Pèche", "Poire", 'Pomme', 'Abricot'];
        	foreach ($fruits as $key => $fruit) {
        		echo "<input type='checkbox' value=$fruit name=$fruit> $fruit";
        	}
        	//tswln@icloud.com

        ?>
    </p>
</body>

</html>

//Connexion a la db
//Executer la requete SQL
//Afficher Les données