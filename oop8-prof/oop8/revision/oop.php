<?php
	include_once __DIR__ . '/../classes/Personne.php';
	include_once __DIR__ . '/../classes/User.php';
	include_once '../classes/Animals.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5/ OOP: Les objets et les classes</title>
</head>

<body>
    <?php
    	include_once "../components/navbar.php";
    ?>

    <section>
        <h2>Classe basique</h2>
        <?php
        	class Djemai {
        		public $firstName = "Samy";
        		public $lastName = "Djemai";

        		public function renderDjemai() {
        			echo '<div>
                        <p>Nom: ' . $this->lastName . '</p>
                        <p>Prenom: ' . $this->firstName . '</p>
                    </div>';
        		}
        	}
        	//Instancier une object de type Djemai dans la variable djemai1
        	$djemai1 = new Djemai();
        	var_dump($djemai1);
        	//Afficher/lire les proprietés de l'objet djemai1
        	echo '<p>' . $djemai1->firstName . '</p>';
        	echo '<p>' . $djemai1->lastName . '</p>';
        	//executer la methode renderDjemai de l'objet djemai1
        	$djemai1->renderDjemai();

        	//Instancier une deuxiemme objet
        	$djemai2 = new Djemai();
        	$djemai2->renderDjemai();
        ?>
    </section>
    <section>
        <h2>Classe paramétrée</h2>
        <?php

        	$personne1 = new Personne("Doe", "John");
        	$personne1->renderPersonne();

        	$personne2 = new Personne('Potter', 'Harry');
        	$personne2->renderPersonne();
        ?>
    </section>
    <section>
        <h2>Exercice 1: </h2>
        <?php
        	//1- Créer la classe User:
        	//1.1- Les proprietes: email, username, password
        	//1.2- Les methodes: renderUser():
        	// <div>
        	//     <h2>username</h2>
        	//     <p>email</p>
        	// </div>

        	//2- Instancier deux user, et les afficher.

        	//Exercice 2:
        	//1- Déplacer la classe User dans un nouveau fichier: ../classes/User.php

        	//2- Inclure le fichier dans oop.php

        	$user1 = new User("sam@sam.com", "Sam", "123456");
        	$user2 = new User("john@doe.com", "John", "azerty");
        	$user1->renderUser();
        	$user2->renderUser();
        ?>

        <section>
            <h2>Accesseurs/Getters et Mutateurs/Setters</h2>
            <?php
            	$personne3 = new Personne('Test', 'Exemple');
            	echo '<p>' . $personne3->getFirstName() . '</p>';
            	echo '<p>' . $personne3->getLastName() . '</p>';

            	// Les proprietes sont en privé et donc non accessible a l'exterieur de l'object
            	// echo '<p>' . $personne3->lastName . '</p>'
            	// $personne3->lastName = "Nouveau nom";
            	$personne3->renderPersonne();
            	$personne3->setFirstName('Samy')->setLastName("Djemai");
            	$personne3->renderPersonne();
            ?>
        </section>
    </section>
    <section>
        <h2>Exercice 3:</h2>
        <?php
        	//1- Mettre en privé les propriétés de la classe User
        	//2- Ajouter des getters et setters dans la classe User pour email et username.
        	$user2->setEmail("john.doe@gmail.com");
        	$user2->renderUser();
        ?>
    </section>
    <section>
        <h2>Les methodes static d'une classe</h2>
        <p>Les methodes sont des fonctions qui peuvent etre executer depuis la classe de manière générale</p>
        <?php
        	User::sayHello();

        	$users = [$user1, $user2, new User('test@exemple.com', "test", "exempl")];
        	User::renderUsers($users);
        ?>
    </section>
    <section>
        <h2>Héritage</h2>
        <?php
        	$eleve1 = new Eleve("Djemai", "Toto", ['PHP', 'React']);
        	$eleve1->renderPersonne();
        ?>
    </section>

    <section>
        <h2>Classes abstraites</h2>
        <?php
        	//On ne peut pas instancier une classe abstraite
        	//$animal1 = new Animals('Sam', 10);
        	$dog1 = new Dog("Bob", 5);
        	$cat1 = new Cat("Felix", 2);
        	$bird1 = new Bird('Titi', 1);
        	$wolf1 = new Wolf('Sam', 6);
        	$animals = [$dog1, $cat1, $bird1, $wolf1];

        	foreach ($animals as $key => $animal) {
        		$animal->renderAnimal();
        		$animal->nutrition();
        		if (get_class($animal) === "Wolf") {
        			$animal->capacity();
        		}
        	}
        ?>
    </section>
    <section>
        <h2>Les interfaces</h2>
        <?php
        	$etres = [$personne1, $dog1, $personne2, $cat1];

        	foreach ($etres as $key => $etre) {
        		$etre->render();
        	}

        ?>
    </section>
    <section>
        <h2>Typé les paramètres d'un fonction</h2>
        <?php
        	function affiche(string $text) {
        		echo "<p>$text</p>";
        	}

        	affiche('Test');

        	function afficheAnimal(Affichable $animal) {
        		$animal->render();
        	}
        	afficheAnimal($dog1);
        	afficheAnimal($cat1);
        	afficheAnimal($personne1);
        ?>
    </section>
</body>

</html>