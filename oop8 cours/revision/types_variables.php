<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1/ Les types et variables</title>
</head>

<body>
    <h1>1/ Les types et variables</h1>
    <?php
    	//Ajouter du texte dans le fichier HTML final
    	echo '<p>Hello</p>';

    	//Déclarer/definir une variable nommée hello qui possede un type string
    	$hello = 'Salut! Je suis un script php!';

    	//Afficher dans notre fichier la valeur de la variable hello
    	echo $hello;

    	//Concatener 3 chaines de caractères pour en faire une seul.
    	echo '<p>' . $hello . '</p>';

    	//phpinfo() est une fontion qui permet d'afficher les infos sur PHP

    	//Les double guillemets permettent de directement lire la valeur d'une variable sans concatenation
    	echo "<p>$hello</p>";

    	//Reaffecter une variable
    	$hello = 'On peut réaffecter une nouvel valeur a une variable';

    	//La valeur de la variable hello a changé
    	echo "<p>$hello</p>";

    	//Exercice 1:
    	//Déclarer deux variable: nom et prenom.
    	$prenom = 'Samy';
    	$nom = 'Djemai';

    	//afficher la phrase: Salut, (nom) (prenom), comment allez vous?
    	echo '<p>Salut, ' . $nom . ' ' . $prenom . ', Comment allez vous?</p>';

    	echo "<p>Salut, $nom $prenom, comment allez vous?</p>";

    	//Les nombres/ Numbers;
    	$count = 12;
    	$pi = 3.14;
    	$countPlusCinq = $count + 10;
    	$countPlusPi = $count + $pi;

    	//On utlise le var_dump() pour avoir de l'information sur une variable
    	var_dump($count);
    	var_dump($pi);
    	var_dump($prenom);

    	echo "<p>$countPlusCinq</p>";
    	echo "<p>$countPlusPi</p>";

    	$a = 4;
    	$b = 3;
    	//Opérations mathématiques:
    	echo '<p> Addition: ' . ($a + $b) . '</p>';
    	echo '<p> Soustraction: ' . ($a - $b) . '</p>';
    	echo '<p> Multupilication: ' . ($a * $b) . '</p>';
    	echo '<p> Division: ' . ($a / $b) . '</p>';
    	echo '<p> Module/reste: ' . ($a % $b) . '</p>';
    	// 4 ** 3: 4 x 4 x 4
    	echo '<p> 4 Puissance 2: ' . ($a ** 2) . '</p>'; //16
    	echo '<p> Puissance: ' . ($a ** $b) . '</p>'; //64
    	echo '<p> racine carée: ' . (sqrt($a)) . '</p>';

    	$nbOeufs = 1; //1
    	$nbOeufs = $nbOeufs + 3; //4
    	echo "<p>nombre d'oeufs = $nbOeufs</p>";

    	$nbOeufs = $nbOeufs - 1; // 3
    	echo "<p>nombre d'oeufs = $nbOeufs</p>";

    	//Alternatives:
    	// $nbOeufs = $nbOeufs + 5;
    	$nbOeufs += 5;
    	echo "<p>nombre d'oeufs = $nbOeufs</p>";

    	// $nbOeufs = $nbOeufs * 2;
    	$nbOeufs *= 2;
    	echo "<p>nombre d'oeufs = $nbOeufs</p>";

    	//Les booleans:
    	$vrai = true;
    	$faux = false;

    ?>

    <a href="./conditions.php">2/ Les conditions:</a>
</body>

</html>