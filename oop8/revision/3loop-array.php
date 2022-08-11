<?php
	$users = [
		[
			'email' => 'sam.djm93@gmail.com',
			'username' => 'Sam',
			'age' => 28,
			'passion' => 'Programmation',
			'avatar' => "https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTZ8fG1hbnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60",
            // 'posts' => 
            //     [
            //         'title' => 'Un titre',
            //         'content' => 'Un contenu',
            //     ],
            //     [
            //         'title' => 'Un titre',
            //         'content' => 'Un contenu',
            //     ],
		],
		[
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



<!-- ****************************************************** -->
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP-OOP8 (loops)</title>
        <meta name="description" content="PHP-OOP8 (loops)">
        <link rel="shortcut icon" href="https://www.onespan.com//sites/default/files/blog/images/logo-php-adbac78231.png">
        </head>
    </head>
    
    <body>

            <?php 
            include_once "../components/navbar.php"; 
            ?>
            <h1>PHP-OOP8 (III) Loops & Arrays</h1>
            <!-- (myPATH) http://localhost/y.doranco-6-OOP/oop8/revision/3loop-array.php -->
            <!-- <ol>
                <li>
                    <a href="../index.php">(0) Home Page</a>
                </li>
                <li>
                    <a href="1type-var.php">(I) Type et Variable</a>
                </li>
                <li>
                    <a href="2condition.php">(II)Condition</a>
                </li>
            </ol> -->

            <section>
                <?php 
                echo "<h3>(1) Loop FOR +=1</h3>";
                for($i = 0; $i <= 10; $i++){
                    echo "<p>Loop n°$i</p>";
                }
                echo "<hr>";


                // EXO::
                echo "<h3>(2) Loop FOR +=2</h3>";
                echo "<h6>use loop FOR to show even numbers between 0 and 20</h6>";
                for($i = 0; $i <= 20; $i+=2){
                    echo "<p>Loop n°$i</p>";
                }
                echo "<hr>";


                echo "<h6>ALT-1: use loop FOR to show even numbers between 0 and 20</h6>";
                for ($i=0; $i<=10; $i++){
                    echo '<p>even numbers: ' . ($i * 2) . '</p>';
                }
                echo "<hr>";


                echo "<h6>ALT-2: use loop FOR to show even numbers between 0 and 20</h6>";
                for ($i=0; $i<=20; $i++){
                    if($i % 2 === 0){
                        echo '<p>even numbers: ' . ($i) . '</p>';
                    }
                    
                }
                echo "<hr>";
                ?>
            </section>

            <?php 
                echo "<h3>(3) Loop WHILE</h3>";
                $i = 0;
                while($i <= 21){
                    echo '<p>even numbers: ' . ($i) . '</p>';
                    $i = $i + 3; 
                }
                echo "<hr>";
            ?>

            <!-- listCours -->
            <!-- ------------------------------------------------- --> 
            <section>
                <?php 
                echo "<h3>(4) Array (afficher CSS)</h3>";
                $listCours = ['HTML', 'CSS', 'JavaScript', 'PHP', 'React', 'WordPress'];
                // array(6) { [0]=> string(4) "HTML" [1]=> string(3) "CSS" [2]=> string(10) "JavaScript" [3]=> string(3) "PHP" [4]=> string(5) "React" [5]=> string(9) "WordPress" }

                var_dump($listCours);
                echo '<p>elem at position 1: ' . $listCours[1] . '</p>'; // CSS
                echo '<p>elem at position 3: ' . $listCours[3] . '</p>'; // PHP
                echo '<p>taille de ARRAY: ' . count($listCours) . '</p>'; // 6
                echo "<hr>";
                ?>
            </section>

            <!-- ------------------------------------------------- --> 
            <section>
                <?php 
                    // Loop1: $i = 0 / listCourst[0] = HTML
                    // Loop1: $i = 1 / listCourst[1] = CSS
                    // Loop1: $i = 2 / listCourst[2] = JavaScript
                    // Loop1: $i = 3 / listCourst[3] = PHP
                    // Loop1: $i = 4 / listCourst[4] = React
                    // Loop1: $i = 5 / listCourst[5] = WordPress
                    echo "<h3>(5) Loop over an Array</h3>";
                    for($i=0; $i<count($listCours); $i++){
                        echo '<p>'. $listCours[$i] .'</p>';
                    }
                    echo "<hr>";
                ?>
            </section>

            <!-- user profile -->
            <!-- ------------------------------------------------- --> 
            <section>
                <?php 
                    echo "<h3>(6) Array - user1 (Tableau Normal)</h3>";
                    $user1 = ['sam.djm93@gmail.com', 'Sam', 28, 'programmation'];
                    var_dump($user1);
                    echo '<div>
                            <h2>Username: ' . $user1[1] . '</h2>
                            <p>Email: ' . $user1[0] . '</p>
                            <p>Your age: ' . $user1[2] . 'yos</p>
                            <p>Your hobbies are: ' . $user1[3] . '</p>
                        </div>';
                    echo "<hr>";
                ?>
            </section>

            <!-- user profile (array associatif) -->
            <?php 
                echo "<h3>(7) Array - user2 (Tableau Associatif)</h3>";
                $user2 = ['username'=>'Samantha', 'avatar' => "https://images.unsplash.com/photo-1492175742197-ed20dc5a6bed?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGxhZHl8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60", 'email'=>'sam.djm93@gmail.com',  'age'=>28, 'passion'=>'programmation'];

                var_dump($user2);
                echo '<div>
                <h2>Username :' . $user2['username'] . '</h2>
                <img style="width:10%;" src=' . $user2['avatar'] . '>
                <p>Your email: ' . $user2['email'] . '</p>
                <p>Your age is: ' . $user2['age'] . '</p>
                <p>Your passion is: ' . $user2['passion'] . '</p>
                </div>';
                echo "<hr>";
            ?>

            <?php 
                echo "<h3>(8) EXO (Tableau-Array ASSOCIATIF)</h3>";
                // (1) déclarer un array associatif représentatnt un article:
                    // title
                    // content
                // (2) afficher l'article
                $article1 = ['title'=>'Summer', 'content' => "Lorem ipsum dolor sit amet. Ea consequuntur similique ad fugiat culpa est minima voluptatem. A eaque voluptas ea beatae exercitationem At officiis doloremque hic laborum odio. Ut optio iusto sed reiciendis dolorum et recusandae libero non quam velit! Sit voluptatem aspernatur sit distinctio ipsam id adipisci impedit non odit suscipit."];

                var_dump($article1);
                echo '<div>
                        <h3>Title of the article : ' . $article1['title'] . '</h3>
                        <p>The content of the article: ' . $article1['content'] . '</p>
                      </div>';
                echo "<hr>";
            ?>

            <?php 
                echo "<h3>(9) Array inside a Long Array (USERS)</h3>";

                // var_dump($users);
                for($i = 0; $i < count($users); $i++){
                    $user = $users[$i];
                    var_dump($user);
                    echo '
                    <div>
                        <h2>' . $user['username'] . '</h2>
                        <img 
                            style="width:100px; 
                            height:100px; 
                            border-radius:100px;" 
                            src=' . $user['avatar'] . '>
                        <p>Email: '. $user['email'] .' </p>
                        <p>Votre âge est de: ' . $user['age'] . '</p>
                        <p>Votre passion est: '. $user['passion'] .'</p>
                    </div>
                    ';
                    echo "<hr>";
                }
            ?>

            <!-- cours1 (push, pop) JOUR3 -->
            <!-- (10) Fonctions natives des tableaux -->
            <!-- ------------------------------------------------- --> 
            <section>
                <?php 
                    echo "<h3>(10) Fonctions natives des tableaux (arrays)</h3>";
                    $cours1 = ['HTML', 'CSS', 'PHP'];
                    foreach($cours1 as $cle => $valeur){
                        echo "<p>La clé: $cle</p>";
                        echo "<p>La valeur: $valeur</p>";
                        var_dump($valeur); // changé (à revoir)
                    }
                    var_dump($cours1);
                    // ajouter un élém à la fin du array
                    array_push($cours1, "JavaScript");
                    echo "<br/>";
                    var_dump($cours1);
                    // supprimer le dernier élem du array
                    array_pop($cours1);
                    echo "<br/>";
                    var_dump($cours1);
                    echo "<hr>";
                ?>
            </section>

            <!-- users (foreach) -->
            <!-- ------------------------------------------------- --> 
            <section>
                <?php 
                    echo "<h3>(11) loop spécial tableau (array)</h3>";

                    foreach($users as $key => $user){
                        echo '<p>User ' . $key . ': ' . $user['username'] . '</p>';
                    }
                    echo "<hr>";


                    // $cle = "title" & "content" 
                    // $valeur = "Untitre" & "Un contenu" 
                    $post = ['title' => 'Un titre', 'content' => 'Un contenu'];
                    foreach ($post as $cle => $valeur){
                        echo "<p>La clé: $cle</p>";
                        echo "<p>La valeur: $valeur</p>";
                    }
                    echo "<hr>";


                    foreach($users as $key => $user){
                        echo "<h4>User n° $key</h4>";
                        foreach($user as $key => $value){
                            echo "<p>La clé: $key</p>";
                            echo "<p>La clé: $value</p>";
                        }
                        echo "<hr>";
                    }
                    
                ?>
            </section>

            <?php 
                echo "<br>";
                echo "<br>";
                echo "<br>";
                echo "<br>";
            ?>
    </body>
</html>