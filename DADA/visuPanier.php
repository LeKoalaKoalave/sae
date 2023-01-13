<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE



?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>The Computer Shop - Panier</title>
        <link rel="stylesheet" href="assets/site/style.css">
        <link rel="stylesheet" href="assets/site/normalize.css">
    </head>

    <body>
        <header>
      <div class="header1">
          <a href="index.php">
              <img src="assets/site/logo-white.png" height="109.75" width="250">
          </a>
          <a class="takecare"> We take care of your feet</a>
      </div>
      <div class="header2">
         <div class="boutonheader2">
             <a href="index.php">Accueil</a>
             <a href="magasin.php">Le shop</a>
             <a href="#">Nos magasins</a>
             <a href="#">Nous contacter </a>
         </div>
             <div class="divpanier">
                 <a href="visuPanier.php"><img src="./assets/site/pannier.svg" alt="panier"></a>
                 <a href="#"><span class="notif">1</span></a>
                <a href="#" class="txtpanier_surpagepanier">Panier</a>
            </div>
      </div>
    </header>
    <div class="block-panier">
    <div class="gauche-panier">
        <h2>VOTRE PANIER</h2>
        <table>
            <tr class="tr1">
                <td class="center">Désignation</td>
                <td>P.U. TTC</td>
                <td>Quantité</td>
                <td>Total TTC</td>
            </tr>
            <tr>
                <td>
                   <div class="designationContenue">
                       <img src="./assets/produits/sneakers1.webp" alt="" width="10%" height="10%">
                       <p class="txtDesignation">Air Jordan 1 Mid Ice Blue</p>
                   </div>
                    
                </td>
                <td>
                    <p>140</p>
                </td>
                <td class="quantiteContenue">
                    <p>1</p>
                    <a class="bleupanier" href="#"><img src="assets/site/rmProduct.png" height="20" width="20"></a>
                    
                </td>
                <td>
                    <p>140</p>
                </td>
            </tr>
        </table>
    </div>
    <div class="droite-panier">
        <h2>RECAPITULATIF</h2>
        <div class="space">
            <p>Panier (1 produit(s)) :</p> 
            <p>140 €</p>
        </div>
        <div class="space">
            <p>Frais de livraison :</p> 
            <p>GRATUIT</p>
        </div>
        <span class="line"></span>
        <span class="lineg"></span>
        <div class="space_price">
            <a>TOTAL :</a> 
            <a class="total_price">140 €</a>
        </div>
        <a href="#" class="pay"><bold>PAIEMENT</bold></a>
        <p>Mode de paiement</p>
        <div class="cards">
            <img src="assets/site/paiement.png" alt="">
        </div>
    </div>
</div>
    

        
        

    </body>
</html>
