<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE


//je crée mon tableau des produits



?>
<!doctype html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
    <title>The Computer Shop - Magasin</title>
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
                 <a href="visuPanier.php"><img src="./assets/site/pannier.svg" alt="panier"></a>
<!--                 <a href="#"><span class="notif">1</span></a>-->
                <a href="#" class="txtpanier_surpagepanier">Panier</a>
            </div>
      </div>
    </header>
    <div class="mid">
        <div class="central">
                <div class="produit">
                    <div class="photo">
                        <a href="article.php"><img src="assets/produits/sneakers1.jpeg" height="140px"></a>
                    </div>
                    <div class="text">
                        <a href="article.php"><H1>Air jordan</H1></a>
                        <p>Lorem ipsum dolor sit amet. Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem repudiandae Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem. </p>
                    </div>
                    <div class="price">
                        <a>prix</a>
                        <a><img src="assets/site/buy.png" height="50px" width="40px"></a>
                    </div>
                </div>
                
        </div>
        <div class="central">
                <div class="produit">
                    <div class="photo">
                        <a href="article.php"><img src="assets/produits/sneakers1.jpeg" height="140px"></a>
                    </div>
                    <div class="text">
                        <a href="article.php"><H1>Air jordan</H1></a>
                        <p>Lorem ipsum dolor sit amet. Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem repudiandae Est earum iusto aut corrupti dolores quo delectus tempore ut culpa architecto a distinctio galisum sit beatae enim vel dolores omnis. Ut quae deleniti ut accusantium molestiae et pariatur odio aut modi repellendus. Cum modi suscipit aut velit saepe 33 autem. </p>
                    </div>
                    <div class="price">
                        <a>prix</a>
                        <a><img src="assets/site/buy.png" height="50px" width="40px"></a>
                    </div>
                </div>
                
        </div>

    </div>
        

            <?php
            //j'affiche mes produits
            ?>
    </body>
</html>
