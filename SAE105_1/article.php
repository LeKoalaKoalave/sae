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
    <link rel="stylesheet" href="assets/site/normalize.css">
</head>

<body>

<div class="fond">
<header>
    <div class="header1">
          <img src="assets/site/logo-white.png" height="109.75" width="250">
          <a class="takecare"> We take care of your feet</a>
      </div>
      <div class="header2">
          <a href="#">Acceuil</a>
          <a href="#">Le shop</a>
          <a href="#">Nos magasins</a>
          <a href="#">Nous contacter </a>
      </div>
    </header>
    <div class="millieu">
        <div class="index">
            <div class="presentoir">
            <a><img src="assets/produits/sneakers1.jpeg" height="270px"> </a>
            </div>
            <div class="bloc">
            <h1>AIR Jordan</h1>
            <h3>301 €</h3>
            <p>Lorem ipsum dolor sit amet. Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem repudiandae Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem. </p>
            </div>
            
        </div>
        <div>
            <a class="panier " href="#">Ajouter au panier</a>
        </div>
        <div class="avis">
            <h2>Avis (6.33/10)</h2>
                <div class="avis1">
                    <div class="date">
                        <a> Seb, le 17/05/2018 (7/10)</a>
                    </div>
                    <div class="avis-text">
                        <a>Super produit, je le recommande !</a>
                    </div>
                </div>
        
        </div>
        <div class="ps">
            <h2>Produits Similaires</h2>
            <div class="pro">
                <div class="shoes">
                    <h3>Sneakers1</h3>
                    <a ><img src="assets/produits/sneaker13.webp" height="270px"></a>
                </div>
                <div class="shoes">
                    <h3>SNeakers2</h3>
                    <a ><img src="assets/produits/sneakers10.jpg" height="270px"></a>
                </div>
            </div>
        </div>
    </div>


</div>


<?php
// a votre imagination
?>
</body>
</html>
