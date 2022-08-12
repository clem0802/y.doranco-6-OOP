<?php 
    include_once '../classes/Personne.php';
    include_once '../classes/User.php';
?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP-OOP8 (oop-oriented object)</title>

        <title>PHP-OOP8 (classes)</title>
        <meta name="description" content="PHP-OOP8 (classes)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>
        <?php 
            include_once '../components/navbar.php'
        ?>
        <h1>PHP-OOP8-Samy (V) Oriented Object</h1>


        <!-- (1) Basic Class -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(1) Basic Class</h3>";

            class Djemai{
                // propriété-attribut
                public $firstName = "Samy (basic class)";
                public $lastName = "Djemai (basic class)";

                function renderDjemai(){
                    echo '<div>
                            <p>Nom: ' . $this->lastName . '</p>
                            <p>Prénom: ' . $this->firstName . '</p>
                        </div>';
                }
            }

            // instancier un objet de type Djemai dans la variable djemai1
            $djemai1 = new Djemai();
            var_dump($djemai1);
            echo "<hr>";
            // afficher-lire les propriétés de l'objet djemai1
            echo '<p>' . $djemai1->firstName . '</p>';
            echo '<p>' . $djemai1->lastName . '</p>';
            echo "<hr>";

            // exécuter la méthode renderDjemai de l'objet djemai1
            $djemai1->renderDjemai();
            echo "<hr>";

            // instancier un autre objet
            $djemai2 = new Djemai();
            $djemai2->renderDjemai();
            echo "<hr>";
            ?>
        </section>


        <!-- (2) Class + Parameters (PERSONNE) -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(2) Class + Parameters</h3>";

            // class Personne{
            //     // propriétés
            //     public $firstName;
            //     public $lastName;

            //     // le constructeur
            //     function __construct($prenom, $nom){
            //         $this->firstName = $prenom;
            //         $this->lastName = $nom;
            //     }

            //     // les méthodes 
            //     // (les accesseurs) GETTER => pr récupérer la valeur des attributs
            //     // (les mutateurs) SETTER => pr modifier la valeur des attributs
            //     function renderPersonne(){
            //         echo '<div>
            //             <p>Prénom: ' . $this->firstName . '</p>
            //             <p>Nom: ' . $this->lastName . '</p>
            //         </div>';
            //     }
            // }

            // instancier d'autres objets
            $personne1 = new Personne("John", "DOE");
            $personne1->renderPersonne();
            $personne2 = new Personne("Patte", "PATROUILLE");
            $personne2->renderPersonne();
            echo "<hr>";
            ?>
        </section>


        <!-- (3) EXO OOP (USER) -->
        <!-- ----------------------------------------- -->
        <!-- 1. déplacer la classe User dans un nouveau fichier classes/User.php -->
        <!-- 2. inclure le fichier dans oop.php -->
        <section>
            <?php 
            echo "<h3>(3) EXO</h3>";

            // class User{
            //     // propriétés-attribut
            //     public $userName;
            //     public $email;
            //     private $password;

            //     // le constructeur
            //     function __construct($userName, $email, $password){
            //         $this->userName = $userName;
            //         $this->email = $email;
            //         $this->password = $password;
            //     }

            //     // les méthodes 
            //     // (les accesseurs) GETTER => pr récupérer la valeur des attributs
            //     // (les mutateurs) SETTER => pr modifier la valeur des attributs
            //     function renderUser(){
            //         echo '<div>
            //                 <h2>username: ' . $this->userName . '</h2>
            //                 <p>email: ' . $this->email . '</p>
            //              </div>';
            //     }  
            //     // function saveToBdd{
            //     //     // connexion à la db
            //     //     // requête
            //     //     // exécution
            //     // }                    
            // }
            // // <p>password: ' . $this->password . '</p>


            // instancier d'autres objets
            $user1 = new User("Glenn", "glenn@gmail.com", "1234"); //
            $user1->renderUser();
            $user2 = new User("Gould", "gould@gmail.com", "12345"); //
            $user2->renderUser();
            echo "<hr>";
            ?>
        </section>


        <!-- (4) GETTER / SETTER -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(4) Accesseurs/Getters & Mutateurs/Setters</h3>";

            // instancier d'autres objets
            $personne3 = new Personne("Mohamed", "Salhi");
            echo '<h4>' . $personne3->getFirstName() . '</h4>';
            echo '<h4>' . $personne3->getLastName() . '</h4>';

            // cet echo ne marche pas, SI les propriétés dans Personne.php sont en "private"
            // echo '<p>' . $personne3->lastName . '</p>';
            
            $personne3->renderPersonne(); 
            $personne3->setFirstName("Samy")->setLastName("Djemai"); // enchaîner les fonctions
            $personne3->renderPersonne();
            echo "<hr>";
            ?>
        </section>


        <!-- (5) EXO: GETTER / SETTER -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            // mettre en privé les propriétés de la classe User
            // ajouter des getters et setters dans la classe User pour username et email
            echo "<h3>(5) EXO Getters & Setters</h3>";

            // instancier d'autres objets
            $user3 = new User("Mohamed", "mohamed@gmail.com", "12345");
            echo '<h3>' . $user3->getUserName() . '</h3>';
            echo '<p>' . $user3->getEmail() . '</p>';
            echo "<hr>";

            
            $user3->renderUser(); 
            $user3->setUserName("Isaac")->setEmail("isaac@gmail.com"); // enchaîner les fonctions //
            $user3->renderUser();
            echo "<hr>";
            ?>
        </section>


        <!-- (6) Méthode Static -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(6) Methode Static</h3>";
            echo "<p>Les méthodes sont des fonctions qui peuvent être exécutées depuis la classe de manière générale</p>";

            User::sayHello();
            $users = [$user1, $user2, $user3, new User("Bach", 'bach@exemple.com', "4567")];
            User::renderUsers($users);
            ?>
        </section>


        <!-- (7) Héritage -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(7) Héritage</h3>";
            $eleve1 = new Eleve("Toto-nom", "Tata-prenom");
            $eleve1->renderPersonne();
            ?>
        </section>


    </body>
</html>