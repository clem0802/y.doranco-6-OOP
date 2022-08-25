<?php
	$links = [
		[
			'url' => '/oop8/index.php',
			'name' => 'Acceuil',
		],
		[
			'url' => '/oop8/revision/types_variables.php',
			'name' => '1/ Les types et les variables',
		],
		[
			'url' => '/oop8/revision/conditions.php',
			'name' => '2/ Les conditions',
		],
		[
			'url' => '/oop8/revision/boucles_liste.php',
			'name' => '3/ Les boucle et les tableaux',
		],
		[
			'url' => '/oop8/revision/fonctions.php',
			'name' => '4/ Les Fonctions',
		],
		[
			'url' => '/oop8/revision/oop.php',
			'name' => '5/ Les Objets et les classes',
		],
	]

	//SVG: Scalable Vector Graphic
?>

<link rel="stylesheet" href="/oop8/styles/navbar.css">

<nav>
    <svg id="menuButton" width="32" height="32" viewBox="0 0 1080 1080" fill="#245195">
        <rect y="849" width="1080" height="231" rx="93" />
        <rect width="1080" height="231" rx="93" />
        <rect y="424" width="1080" height="231" rx="93" />
    </svg>
    <p id='brand'>BRAND</p>
    <ul id='menu'>
        <?php
        	foreach ($links as $key => $link) {
        		echo '
                <li>
                    <a href=' . $link['url'] . ' >' . $link['name'] . '</a>
                </li>
                ';
        	}
        ?>
    </ul>
</nav>

<script src="/oop8/script/navbar.js"></script>