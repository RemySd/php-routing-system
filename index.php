<?php

$routeName = 'home';

if (!empty($_GET['route'])) {
    $routeName = $_GET['route'];
}

if ($routeName === 'home') {
    echo 'Hey ! Ceci est ma page d\'accueil</br>';
    echo '<a href="index.php?route=test">Voir la page de test</a>';
} elseif ($routeName === 'test') {
    echo 'Ceci est une page de test</br>';
    echo '<a href="index.php">Retourner à la page d\'accueil</a>';
} else {
    echo 'Page introuvable !!';
}
