<?php

// prend en paramètre le nom d'un fichier (au format JSON) à charger
// retourne un tableau associatif
// Question : $nomFichier est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function chargerFichier($nomFichier) {
    $nomFichierCharge = file_get_contents("$nomFichier");
    $nomFichierTab = json_decode($nomFichierCharge, true);
    return $nomFichierTab;
}

// prend en paramètre un produit
// affiche le code html permettant l'affichage du produit
// Question : $produit est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
// Et reference ?
function afficheProduit($produit, $reference) {
    echo '
            <div class="mid">
                <div class="central">
                    <div class="produit">
                        <div class="photo">
                            <a href="article.php"><img src="'.$produit[$reference]["imageUrl"] .'" height="140px"></a>
                        </div>
                        <div class="text">
                            <a href="article.php"><H1>'.$produit[$reference]["titre"].'</H1></a>
                            <p>'.$produit[$reference]["description"].'</p>
                        </div>
                        <div class="price">
                            <a>'.$produit[$reference]["prix"].'</a>

                            <a><img src="assets/site/buy.png" height="50px" width="40px"></a>
                            <!-- ligne du dessus à remplacer par
                                <a href="ajoutPanier.php?reference= '.$reference.'">
                                    <img src="assets/site/buy.png" alt="" height="50px" width="40px">
                                </a>
                            --!>

                        </div>
                    </div>
                </div>
            </div>
        ';
}

function afficheToutProduit() {
    $produits = chargerFichier("data/products.json");
    foreach($produits as $cle => $p){
        echo '
            <div class="mid">
                <div class="central">
                    <div class="produit">
                        <div class="photo">
                            <a href="article.php"><img src=" '.$p["imageUrl"] .' " height="140px"></a>
                        </div>
                        <div class="text">
                            <a href="article.php">'. $p["titre"] .'</a>
                            <p>'. $p["description"] .'</p>
                        </div>
                        <div class="price">
                            <a>'. $p["prix"] .'€</a>

                            <a href="ajoutPanier.php?reference= '. $cle .' ">
                                    <img src="assets/site/buy.png" alt="" height="50px" width="40px">
                            </a>
                            <!-- ligne du dessus à remplacer par
                                <a href="ajoutPanier.php?reference= '. $cle .' ">
                                    <img src="assets/site/buy.png" alt="" height="50px" width="40px">
                                    <a><img src="assets/site/buy.png" height="50px" width="40px"></a>
                                </a>
                            --!>

                        </div>
                    </div>
                </div>
            </div>
        ';
    }
}

// prend en paramètre un comentaire
// Affiche le code html permettant l'affichage d'un commentaire
// Question : $avis : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function afficheCommentaire($avis) {
    // TODO
}

// Prend en paramètre un produit
// Affiche le code HTML permettant d'afficher le bloc correspondant au produi similaire
// Question : $produit est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?
function afficheArticleSimilaire($produit) {
    // TODO
}

// prend en paramètre un tableau indicé de commentaires
// retourne la moyenne des notes relative aux avis associés à cette référence
function calculeMoyenne($reference) {
    // TODO
}




//----------------------------------------------------------------------------------------
// WARNING : ne pas modifier ces lignes
//----------------------------------------------------------------------------------------

if(isset($_SESSION['panier']) == false)
    $_SESSION['panier'] = [];
$panier = $_SESSION["panier"];

?>
