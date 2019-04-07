<?php
require_once __DIR__ . '/../vendor/autoload.php';

// Tableau indexe numeriquement
$products = ['banane','grenade','pamplemousse','fraise','anana','pomme','poire','peche','litchi','mangue'];

// Déclaration du chemin des vues à Twig
$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new  Twig\Environment($loader);



echo $twig->render('index.html.twig', ['products' => $products]);