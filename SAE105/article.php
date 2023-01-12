<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE


//je crée mon tableau des produits (il sera utile...)

//je crée mon tableau de commentaires

//J'ajoute mes commentaires dans le tableau des produits

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>The Computer Shop</title>
    <link rel="stylesheet" href="assets/site/style.css">
    <link rel="stylesheet" href="assets/site/Xstyles.css">
    <link rel="stylesheet" href="assets/site/page d'acceuil.css">
</head>

<body>

<header>
    <img src="./assets/site/logo-white.png" alt="Logo" width="15%" height="15%">
    <p>We take care of your feet</p>
</header>
<nav>
    <div class="bouton_gauche">
        <a href="./article.php">Accueil</a>
        <a href="./magasin.php">Le Shop</a>
        <a href="">Nos magasins</a>
        <a href="">Nous contacter</a>
    </div>
    <div class="panier">
        <a href="./visuPanier.php"><img src="./assets/site/pannier.svg" alt="panier"></a>
        <a href="./visuPanier.php">Panier</a>
    </div>
</nav>

<div class="article">
    <div class="index">
        <div class="chaussure1">
            <img src="./assets/produits/sneakers1.webp" alt="Chaussure1" width="150px">
        </div>
        <div class="info">
            <h1>Air Jordan1 Mid Ice Blue</h1>
            <h3 class="prix_test">140€</h3>
            <p class="descri">La marque au Jumpman nous réserve son lot de surprises en ce début d’année, preuve en est cette nouvelle Air Jordan 1 Mid Ice Blue.<br>La silhouette mi-montante se distingue par ses nuances de bleu. Elle affiche une base en cuir bleu pastel surmontée de superpositions en cuir grainé bleu université. De plus, le swoosh latéral est doublé d’un liseré noir assorti au logo Wings et au Jumpman sur la languette. Pour finir, une midsole blanche et une outsole bleue parachèvent le design.</p>
        </div>
    </div>
    <div class="ajouter_panier">
        <a href="">Ajouter au Panier</a>
    </div>
    <div class="avis">
        <h2>Avis (6.33/10)</h2>
        <div class="group-p">
            <p>Seb, le 12/05/2018 (7/10)</p>
            <p>Super produit je le recommande</p>
        </div>
        <div class="group-p">
            <p>Gilles, le 17/06/2018 (8/10)</p>
            <p>Produit conforme à mes attentes. La livraison est toujorus au top !</p>
        </div>
        <div class="group-p">
            <p>Vincent, le 05/08/2018 (04/10)</p>
            <p>Produit de bonne qualité mais j'ai eu deux chaussures gauches. Bof bof :-(</p>
        </div>
    </div>
    <div class="prod_sim">
        <h2>Produits Similaires</h2>
        <div class="flex">
            <div>
                <h3>Sneakers1</h3>
                <a><img src="assets/produits/sneakers12.webp" height="270px"></a>
            </div>
            <div class="shoe">
                <h3>Snekaers2</h3>
                <a><img src="assets/produits/sneakers2.webp" height="270px"></a>
            </div>
        </div>
    </div>
</div>
