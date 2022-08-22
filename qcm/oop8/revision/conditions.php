<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition</title>
</head>


<body>
    <?php
    	include_once "../components/navbar.php";
    ?>

    <h1>1/ Les conditions</h1>
    <section>
        <h2>La condition IF:</h2>
        <?php
        	$isPermis = false;
        	if ($isPermis) {
        		echo "<p>Vous avez le permis</p>";
        		echo "<p>Vous pouvez conduire!</p>";
        	}
        ?>
        <h2>Le IF et ELSE</h2>
        <?php
        	if ($isPermis) {
        		echo "<p>Vous avez le permis</p>";
        		echo "<p>Vous pouvez conduire!</p>";
        	} else {
        		echo "<p>Vous ne pouvez pas conduire!</p>";
        	}
        ?>
    </section>

    <section>
        <h2>Opérateurs de comparaison</h2>
        <?php
        	echo "<p>Egalité des valeurs:</p>";
        	$a = 10;
        	$b = 10;

        	$isAEgalB = $a == $b;
        	echo "<p> $a == $b :</p>";
        	var_dump($isAEgalB);

        	echo "<p>Inégalité des valeurs:</p>";
        	$isADiffB = $a != $b;
        	echo "<p> $a != $b :</p>";
        	var_dump($isADiffB);

        	echo "<p> $a >= $b :</p>";
        	var_dump($a >= $b);

        	echo "<p> $a > $b :</p>";
        	var_dump($a > $b);

        	echo "<p> $a <= $b :</p>";
        	var_dump($a <= $b);

        	echo "<p> $a < $b :</p>";
        	var_dump($a < $b);
        ?>
        <section>
            <h2>Exemple d'utilisatation</h2>
            <?php
            	$numA = 3;
            	$numB = 1;
            	if ($numA >= $numB) {
            		echo "<p>numA est superieur a numB</p>";
            	} else {
            		echo "<p>numA est inferieur a numB</p>";
            	}
            ?>
        </section>

        <section>
            <h2>Opérateurs de logique</h2>
            <p>Le ET: &&</p>
            <?php
            	$isPermis = true;
            	$isMajeur = true;
            	if ($isPermis && $isMajeur) {
            		echo '<p>Vous pouvez conduire</p>';
            	} else {
            		echo '<p>Vous ne pouvez pas conduire</p>';
            	}
            	//true && true = true
            	//true && false = false
            	//false && true = false
            	//false && false = false
            ?>

            <p>Le OU: ||</p>
            <?php
            	$isUser1Winner = false;
            	$isUser2Winner = false;

            	if ($isUser1Winner || $isUser2Winner) {
            		echo '<p>Au moins un des utilisateurs a gagné
                    </p>';
            	} else {
            		echo '<p>Aucun utilisateur n\'a gagné</p>';
            	}
            	//true || true = true
            	//true || false = true
            	//false || true = true
            	//false || false = false
            ?>
        </section>

        <section>
            <?php
            	//Exercice
            	// Ecrire un algorithme qui a partir d’une variable age
            	// affiche :
            	// - "Poussin" de 6 à 7 ans
            	// - "Pupille" de 8 à 9 ans
            	// - "Minime" de 10 à 11 ans
            	// - "Cadet" après 12 an
            	$age = 15;

            	if ($age >= 6 && $age <= 7) {
            		echo '<p>Poussin</p>';
            	} else if ($age >= 8 && $age <= 9) {
            		echo '<p>Pupille</p>';
            	} else if ($age >= 10 && $age <= 11) {
            		echo '<p>Minime</p>';
            	} else if ($age >= 12) {
            		echo '<p>Cadet</p>';
            	} else {
            		echo "<p>Trop jeune!</p>";
            	}
            ?>

            <section>
                <h2>Opérateur ternaire/conditionnel</h2>
                <p>(condition) ? Si vrai/true : Si faux/false</p>
                <?php
                	$isPermis = true;
                	$isMajeur = false;
                	echo $isPermis && $isMajeur ? "Vous pouvez conduire" : "Vous ne pouvez pas conduire";
                ?>
            </section>

            <section>
                <h2>SWITCH CASE</h2>
                <?php
                	$day = date('D');
                	switch ($day) {
                		case 1:
                			echo '<p>Lundi</p>';
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
                		case 7:
                			echo '<p>Week-end</p>';
                			break;
                		default:
                			echo '<p>jour inconnu</p>';
                	}
                ?>
            </section>
        </section>
    </section>
    <a href="./boucles_liste.php">3/ Les boucles et les listes</a>
</body>

</html>