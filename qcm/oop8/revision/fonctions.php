<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4/ Les fonctions</title>
</head>

<body>
    <?php
    	include_once '../components/navbar.php'
    ?>
    <h1>Les fonctions:</h1>

    <section>
        <h2>fonction basique:</h2>
        <?php
        	function afficheBonjour() {
        		echo "<p>Bonjour</p>";
        		echo '<p>Je suis une fonction</p>';
        	}
        	afficheBonjour();
        	echo '<p>Du code au milieu</p>';
        	afficheBonjour();
        ?>
    </section>
    <section>
        <h2>Fonction avec paramètres</h2>
        <?php
        	//On declare une fonction qui prend un paramètre appelé $text
        	function affiche($text) {
        		echo '<h3>' . $text . '</h3>';
        	}

        	//On execute la fonction en passant en argument la chaine de caractères:
        	affiche('Je decide de la valeur des paramètres a l"execution de la fonction.');

        	affiche('Une autre phrase');
        	//On declare une fonction qui prend plusieurs paramètres appelés $email, $username, $age
        	function afficheUser($email, $username, $age) {
        		echo "
                    <div>
                        <h3>$email</h3>
                        <p>$username vous avez $age ans.</p>
                    </div>
                ";
        	}

        	afficheUser("sam.djm93@gmail.com", "Samy", 28);

        	afficheUser("John.doe@gmail.com", "John", 100);

        	//Exercice:
        	//créer 4 fonctions qui prennent deux parametres a et b:
        	// add: : Additionner et afficher les deux nombres
        	// sub: : soutraire et afficher les deux nombres
        	// mul: : multiplier et afficher les deux nombres
        	// div: : diviser et afficher les deux nombres

        	function add($a, $b) {
        		echo "<p>$a + $b = " . ($a + $b) . "</p>";
        	}
        	add(10, 5);
        	add(112, 154641);

        	function sub($a, $b) {
        		echo "<p>$a - $b = " . ($a - $b) . "</p>";
        	}
        	sub(10, 20);

        	function mul($a, $b) {
        		echo "<p>$a x $b = " . ($a * $b) . "</p>";
        	}
        	mul(2, 2);

        	function div($a, $b) {
        		echo "<p>$a / $b = " . ($a / $b) . "</p>";
        	}
        	div(10, 5);

        ?>

        <section>
            <h2>Exercice</h2>
            <?php
            	//1- Créer une fonction afficheTab qui prend en paramètre un tableau, et affiche chaque élément de ce tableau dans un paragraphe.
            	//2- Déclarer un tableau, et utiliser la fonction afficheTab sur ce tableau.

            	function afficheTab($list) {
            		foreach ($list as $key => $value) {
            			echo '<p>' . $value . '</p>';
            		}
            	}
            	$cours = ['java', "css", 'html', "PHP"];
            	afficheTab($cours);

            	$users = ['Samy', 'john'];
            	afficheTab($users);

            	afficheTab(['Felix', "bob"]);

            	//Exercice:
            	//1- Créer une fonction qui prend un nombre en paramètre et affiche la table de mutliplication (entre 0 et 10) de ce nombre.
            	//2- Utiliser cette fonction avec: 5 , 12.
            ?>

            <section>
                <h2>Exercice: Table de multiplication</h2>
                <?php
                	//nombre = 5

                	//5 x 0 = 0
                	//5 x 1 = 5
                	//...
                	//50 x 10 = 50

                	function tableMul($number) {
                		for ($i = 0; $i <= 10; $i++) {
                			echo "<p>$number x $i = " . ($i * $number) . "</p>";
                		}
                	}
                	tableMul(5);
                	tableMul(12);
                ?>
            </section>
        </section>
    </section>

    <section>
        <h2>Le retour d'une fonction</h2>
        <?php
        	function createP($text) {
        		$lePara = "<p>$text</p>";
        		return $lePara;
        	}

        	$para1 = createP("SAM!!!");

        	echo $para1;

        	echo createP('Un paragraphe');

        	echo createP('Un autre paragraphe');

        ?>
    </section>

    <section>
        <h2>La moyenne</h2>

        <?php
        	//Créer une fonction qui prends un tableau de nombres, elle retourne la moyenn

        	//[12, 20, 15, 8, 7, 13]

        	//Boucle 1:
        	//		$somme=0
        	//		$note = 12
        	//Boucle 2 :
        	//		$somme = 12
        	//      $note = 20
        	//Boucle 3:
        	//		$somme = 32
        	//      $note = 15
        	//...
        	// Boucle 6:
        	//		$somme = 62
        	//      $note = 13
        	//$somme = 75
        	//Retourner 75 / 6
        	function moyenne($notes) {
        		$somme = 0;
        		foreach ($notes as $key => $note) {
        			$somme = $somme + $note;
        		}
        		return $somme / count($notes);
        	}
        	$lesNotes = [12, 20, 15, 8, 7, 13];
        	echo moyenne($lesNotes);

        ?>
    </section>

</body>

</html>