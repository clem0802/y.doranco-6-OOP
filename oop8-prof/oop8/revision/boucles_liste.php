<?php
	$users = [
		0 => [
			'email' => 'sam.djm93@gmail.com',
			'username' => 'Sam',
			'age' => 28,
			'passion' => 'Programmation',
			'avatar' => "https://img.le-dictionnaire.com/montagne.jpg",
		],
		1 => [
			'email' => 'clemence@gmail.com',
			'username' => 'Clémence',
			'age' => 28,
			'passion' => 'programmation',
			'avatar' => "https://images.unsplash.com/photo-1492175742197-ed20dc5a6bed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxhZHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60",
		],
		[
			'email' => 'gwenn.le.goffic@gmail.com',
			'username' => 'Gwenn',
			'age' => 26,
			'passion' => 'Dessin',
			'avatar' => "https://x.boardgamearena.net/data/avatar/defaults/default-0052.jpg",
		],
		[
			'email' => 'fatiha.idomar@laposte.net',
			'username' => 'Fat',
			'age' => 34,
			'passion' => 'Programmation',
			'avatar' => "https://img.le-dictionnaire.com/montagne.jpg
            ",
		],
		[
			'email' => 'fred@gmail.com',
			'username' => 'Fred',
			'age' => 38,
			'passion' => 'sport',
			'avatar' => "https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60",
		],

	]
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3/ Les boucles et les listes</title>
</head>

<body>
    <?php
    	include_once "../components/navbar.php";
    ?>
    <h1>3/ Les boucles et les listes</h1>
    <section>
        <h2>La boucle for</h2>
        <?php

        	for ($i = 0; $i <= 10; $i += 1) {
        		echo '<p>Boucle n°' . $i . '</p>';
        		//echo "<p>Boucle n° $i</p>";
        	}

        	echo "<h2>Exercice: Afficher les nombre pairs:</h2>";
        	//Exercice:
        	//Utiliser la boucle for pour afficher les nombres pairs entre 0 et 20.
        	for ($nombre = 0; $nombre <= 20; $nombre += 2) {
        		echo "<p>Nombre pair: $nombre</p>";
        	}

        	echo "<h2>Exercice ALT1: Afficher les nombre pairs:</h2>";
        	for ($i = 0; $i <= 10; $i++) {
        		echo '<p> Nombre pair: ' . ($i * 2) . '</p>';
        	}

        	echo "<h2>Exercice ALT2: Afficher les nombre pairs:</h2>";
        	for ($i = 0; $i <= 20; $i++) {
        		if ($i % 2 == 0) {
        			echo '<p> Nombre pair: ' . ($i) . '</p>';
        		}
        	}
        ?>
    </section>
    <section>
        <h2>Boucle while:</h2>
        <?php
        	$i = 0;
        	while ($i <= 20) {
        		echo '<p>While Nombre pair: ' . ($i) . '</p>';
        		$i = $i + 2;
        	}
        ?>
    </section>

    <section>
        <h2>Les listes / arrays:</h2>
        <?php
        	$listCours = ['HTML', 'CSS', 'Javascript', 'PHP', 'React', 'Projet PHP'];
        	var_dump($listCours);
        	echo '<p>Element a la position 1: ' . $listCours[1] . '</p>';
        	echo '<p>Element a la position 3: ' . $listCours[3] . '</p>';
        	echo '<p>Taille du tableau: ' . count($listCours) . '</p>'
        ?>
    </section>
    <section>
        <h2>Fair une boucle sur un tableau</h2>
        <?php
        	//taille du tableau = 6
        	// Boucle 1: $i = 0 / listCours[0] = HtML
        	// Boucle 2: $i = 1 / listCours[1] = CSS
        	// Boucle 2: $i = 2 / listCours[2] = Javascript
        	// Boucle ...
        	// Boucle 6: $i = 5 / listCours[5] = PHP projet

        	for ($i = 0; $i < count($listCours); $i++) {
        		echo '<p>Cours: ' . $listCours[$i] . '</p>';
        	}

        ?>
    </section>
    <section>
        <h2>Tableaux normal</h2>
        <?php
        	$user = ['sam.djm93@gmail.com', 'Sam', 28, "Programmation"];
        	var_dump($user);
        	echo '<div>
                    <h2>Username: ' . $user[1] . '</h2>
                    <p>Email: ' . $user[0] . '</p>
                    <p>Votre est de: ' . $user[2] . 'ans.</p>
                    <p>Votre passion est: ' . $user[3] . '</p>
                    </div>';
        ?>
        <h2>Tableaux associatifs</h2>
        <?php
        	$user1 = [
        		'email' => 'sam.djm93@gmail.com',
        		'username' => 'Sam',
        		'age' => 28,
        		'passion' => 'Programmation',
        		'avatar' => "https://img.le-dictionnaire.com/montagne.jpg",
        	];

        	var_dump($user1);
        	echo '<div>
                <h2>Username :' . $user1['username'] . '</h2>
                <img style="width:100%;" src=' . $user1['avatar'] . '>
                <p>Email: ' . $user1['email'] . '</p>
                <p>Votre age est de: ' . $user1['age'] . 'ans.</p>
                <p>Votre passion est: ' . $user1['passion'] . '</p>
            </div>'
        ?>
    </section>
    <section>
        <h2>Exercice:</h2>
        <?php
        	//1- Déclarer un tableau associatif representant un article:
        	//title
        	//content
        	//2- Afficher l'article:

        	$article = [
        		"title" => 'Un titre',
        		"content" => 'Un contenu tres interessant!'];

        	echo '
                <div>
                    <h2>' . $article['title'] . '</h2>
                    <p>' . $article['content'] . '</p>
                </div>
            '
        ?>

    </section>

    <section>
        <h2>Nos utilisateurs</h2>
        <?php
        	for ($i = 0; $i < count($users); $i++) {
        		$utilisateur = $users[$i];

        		echo '
                    <div>
                    <h2>' . $utilisateur['username'] . '</h2>
                    <img style="width:100px; height:100px; border-radius:100px;"
                    src=' . $utilisateur['avatar'] . '>

                    <p>Email: ' . $utilisateur['email'] . '</p>
                    <p>Votre age est de: ' . $utilisateur['age'] . 'ans.</p>
                    <p>Votre passion est: ' . $utilisateur['passion'] . '</p>
                    </div>';
        	}
        ?>
    </section>
    <section>
        <h2>Les fonctions natives des tableaux</h2>
        <?php

        	$cours = ['HTML', 'CSS', 'PHP'];
        	foreach ($cours as $cle => $valeur) {
        		var_dump($valeur);
        	}

        	//Ajouter un élément a la fin du tableau
        	array_push($cours, "Javasrcipt");
        	echo "<br/>";
        	var_dump($cours);
        	//Supprime le dernier élément du tableau
        	array_pop($cours);

        ?>
    </section>
    <section>
        <h2>Boucles spéciale tableau</h2>
        <?php
        	foreach ($users as $key => $user) {
        		echo '<p>User ' . $key . ': ' . $user['username'] . '</p>';
        	}

        	$post = ['title' => 'Un titre', 'content' => 'Un contenu'];
        	foreach ($post as $cle => $valeur) {
        		echo "<p>La clé: $cle</p>";
        		echo "<p>La valeur: $valeur</p>";
        	}

        	foreach ($users as $key => $user) {
        		echo "<p>User n° $key</p>";

        		foreach ($user as $key => $value) {
        			echo "<p>La clé $key</p>";
        			echo "<p>La valeur $value</p>";
        		}
        	}
        ?>
    </section>

</body>

</html>