<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE



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
        <span class="notif">1</span>
        <a href="./visuPanier.php">Panier</a>
    </div>
</nav>
<div class="block-panier">
    <div class="gauche-panier">
        <h2>Votre panier</h2>
        <table>
            <tr class="tr1">
                <td class="center">Désignation</td>
                <td class="text-right">P.U. TTC</td>
                <td class="text-right">Quantité</td>
                <td class="text-right">Total TTC</td>
            </tr>
            <tr>
                <td class="designation">
                    <img src="./assets/produits/sneakers1.webp" alt="Chaussure" width="10%" height="10%">
                    <p class="jordan">Jordan One Mid Blue Ice</p>
                </td>
                <!-- <td>
                Jordan One Mid Blue Ice
                </td> -->
                <td class="panierquantite">
                    140
                </td>
                <td class="panierquantite">
                    <div class="flex-quantite">
                        1 
                        <img width='32px' src="assets/site/rmProduct.png"></td>
                    </div>
                <td class="panierquantite">
                    140
                </td>
            </tr>
        </table>
    </div>
    <div class="droite-panier">
        <h2>Récapitulatif</h2>
        <div class="space">
            <p>Panier (1 produit(s)):</p> 
            <p>140 €</p>
        </div>
        <div class="space">
            <p>Frais de livraison :</p> 
            <p>GRATUIT</p>
        </div>
        <span class="line"></span>
        <div class="space">
            <p>TOTAL :</p> 
            <p class="total_price">140 €</p>
        </div>
        <button class="pay">PAIEMENT</button>
        <p>Mode de paiement</p>
        <div class="cards">
            <img src="./assets/site/paiement.png" alt="paiement" width="75%">
        </div>
    </div>
</div>

