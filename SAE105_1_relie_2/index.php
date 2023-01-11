<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE


//je crée mon tableau des produits (il sera utile...)


?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>The Computer Shop - Acceuil</title>
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
             <a href="index.php">Acceuil</a>
             <a href="magasin.php">Le shop</a>
             <a href="#">Nos magasins</a>
             <a href="#">Nous contacter </a>
         </div>
             <div class="divpanier">
                 <a href="visuPanier.php">
                     <img src="assets/site/pannier.svg" height="50" width="50">
                </a>
                 <a href="visuPanier.php">Panier</a>
             </div>
      </div>
    </header>
    
    

    <?php
    // a votre imagination 
    ?>
</body>
</html>
