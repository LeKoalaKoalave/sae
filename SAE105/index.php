<!-- <?php echo "help"; ?>
c'est pareil
<?= "help" ?> -->

<?php
session_start();                       // WARNING : NE PAS EFFACER CETTE LIGNE
include('helpers/magasinHelper.php');  // WARNING : NE PAS EFFACER CETTE LIGNE

//je crée mon tableau des produits (il sera utile...)

$produits = chargerFichier("data/products.json");

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

<div class="mid">
    <?php 

    foreach($produits as $cle => $p){ ?>
        
    <div class="shop">
        <div class="produit">
            <div class="shop_gauche">
                <img src="<?= $p['imageUrl'] ?>" alt="Chaussure" height="125px" width="180px"> 
            </div>
            <div class="shop_middle">
                <a href=""><?= $p["titre"] ?></a>
                <p><?= $p["description"] ?></p>
            </div>
            <div class="shop_droite">
                <p><?= $p["prix"] ?>€</p>
                <a href="./ajoutPanier.php?reference=<?= $cle ?>">
                <img src="./assets/site/buy.png" alt="Bouton Achat" height="45px" width="45px">
                </a>
            </div>
        </div>
    </div>

<?php
    }
?>
</div>

</body>
</html>

