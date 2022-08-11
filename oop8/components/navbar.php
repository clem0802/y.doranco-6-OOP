
<?php 
    $links = [
        [
            'url' => '../oop8/index.php',
            'name' => '(0) Accueil (index.php)',
        ],
        [
            'url' => '/oop8/revision/1type-var.php',
            'name' => '(1) Type & Variable',
        ],
        [
            'url' => '../oop8/revision/2condition.php',
            'name' => '(2) Condition',
        ],
        [
            'url' => '../oop8/revision/3loop-array.php',
            'name' => '(3) Loop & Array',
        ],
        [
            'url' => '../oop8/revision/4function.php',
            'name' => '(4) Fonction',
        ],
    ]

// SVG: Scalable Vector Graphic
?>

<link rel="stylesheet" href="../oop8/styles/navbar.css">

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

<script src="../oop8/script/navbar.js"></script>