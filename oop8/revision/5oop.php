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


        <!-- (2) Class + Parameters -->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(2) Class + Parameters</h3>";

            class Personne{
                // propriétés
                public $firstName;
                public $lastName;

                // le constructeur
                function __construct($prenom, $nom){
                    $this->firstName = $prenom;
                    $this->lastName = $nom;
                }

                // les méthodes
                function renderPersonne(){
                    echo '<div>
                        <p>Prénom: ' . $this->firstName . '</p>
                        <p>Nom: ' . $this->lastName . '</p>
                    </div>';
                }
            }

            // instancier d'autres objets
            $personne1 = new Personne("John", "DOE");
            $personne1->renderPersonne();
            $personne2 = new Personne("Patte", "PATROUILLE");
            $personne2->renderPersonne();
            echo "<hr>";
            ?>
        </section>


        <!-- (3) EXO OOP-->
        <!-- ----------------------------------------- -->
        <section>
            <?php 
            echo "<h3>(3) EXO</h3>";

            class User{
                // propriétés
                public $userName;
                public $email;
                private $password;

                // le constructeur
                function __construct($userName, $email, $password){
                    $this->userName = $userName;
                    $this->email = $email;
                    $this->password = $password;
                }

                // les méthodes
                function renderUser(){
                    echo '<div>
                            <h2>username: ' . $this->userName . '</h2>
                            <p>email: ' . $this->email . '</p>
                        </div>';
                }  
                // function saveToBdd{
                //     // connexion à la db
                //     // requête
                //     // exécution
                // }                    
            }
            // <p>password: ' . $this->password . '</p>


            // instancier d'autres objets
            $user1 = new User("Glenn", "glenn@gmail.com", "1234");
            $user1->renderUser();
            $user2 = new User("Gould", "gould@gmail.com", "12345");
            $user2->renderUser();
            echo "<hr>";
            ?>
        </section>



    </body>
</html>