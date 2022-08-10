<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP-OOP (fonction)</title>
        <meta name="description" content="PHP-OOP (fonction)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
    </head>

    <body>
        <?php 
        include_once '../components/navbar.php';
        ?>
        <h1>Les Functions</h1>

        <section>
            <?php 
                echo "<h3>(1) Basic Functions</h3>";
                
                function afficheBonjour(){
                    echo "<p>Hello,</p>";
                    echo "<p>I am a function.</p>";
                    echo "<p>And you?</p>";
                }
                afficheBonjour();
                echo '<p>DU CODE AU MILIEU</p>';
                afficheBonjour();
                echo "<hr>";
            ?>
        </section>

        <section>
            <?php 
            echo "<h3>(2) Functions + parameters</h3>";
            // mon déclare une function qui prend un paramètre appelé $text
            function affiche($text,){
                echo '<p>' . $text . '</p>';
            }

            // on exécute la function en passant en argument la chaîne de caratères
            affiche("Je décide de la valeur des paramètres à l'exécution de la function");
            affiche("Une autre phrase encore");
            echo "<hr>";


            function afficheUser($email, $username, $age){
                echo "
                <div>
                    <h3>$email</h3>
                    <p>$username, vous avez $age ans.</p>
                </div>
                ";
            }
            afficheUser("sam.djm93@gmail.com", "Samy", 28);
            afficheUser("john.doe@gmail.com", "John", 100);
            echo "<hr>";

            // créer 5 fonctions qui prennent deux paramètres a et b
            // (1) add: 
            // (2) sub:
            // (3) mul:
            // (4) div:
            // (5) mod:
            echo "<h3>(3) EXO, 5 functions</h3>";
            function add($a,$b){
                echo 'Add: $a + $b = ' . ($a + $b);
                echo "<br>";
            }
            add(4,8);

            function sub($c,$d){
                echo 'Sub: $c - $d =  ' . ($c - $d);
                echo "<br>";
            }
            sub(9,3);

            function mul($e,$f){
                echo 'Mul: $e * $f =  ' . ($e * $f);
                echo "<br>";
            }
            mul(3,5);

            function div($g,$h){
                echo 'Div: $g / $h =  ' . ($g / $h);
                echo "<br>";
            }
            div(22,2);

            function mod($i,$j){
                echo 'Mod: $i % $j =  ' . ($i % $j);
                echo "<br>";
            }
            mod(14,3);
            echo "<hr>";

            ?>
        </section>


        <section>
            <?php 
                echo "<h3>(4) EXO2 afficher an array</h3>";
                // 1-créer une fonction afficheTab qui prend en paramètre un array, et affiche chaque élément de ce array dans un paragraphe
                // 2-déclarer un array, et utiliser la function afficheTab sur ce array

                $fruits = ['groundberry', 'raspberry', 'orange', 'banana', 'apple', 'lemon'];
                function afficheTab($fruits){
                    for($i=0; $i<count($fruits); $i++){
                        echo '<p>'. $fruits[$i] .'</p>';
                    }
                    echo "<hr>";

                    // foreach ($fruits as $key => $value){
                    //     echo '<p>' . $value . '</p>'
                    // }
                }
                afficheTab($fruits);

                echo "<hr>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
            ?>
        </section>
        
    </body>
</html>

<!-- fonction FATIHA -->
<!-- function fatiha($smart){
    echo '<p>' . $smart . '</p>';
}
fatiha("Je suis une fille très intelligente"); -->