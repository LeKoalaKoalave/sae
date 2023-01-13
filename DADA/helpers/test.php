<?php

// prend en paramètre le nom d'un fichier (au format JSON) à charger
// retourne un tableau associatif
// Question : $nomFichier est : un tableau, une chaine de caractère, ou un entier ? Si c'est un tableau que contient il ?

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

$produit = chargerFichier("data/products.json");
echo afficheProduit($produit, $produit[$R230595]);

//----------------------------------------------------------------------------------------
// WARNING : ne pas modifier ces lignes
//----------------------------------------------------------------------------------------

if(isset($_SESSION['panier']) == false)
    $_SESSION['panier'] = [];
$panier = $_SESSION["panier"];

?>