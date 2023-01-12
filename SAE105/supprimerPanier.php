<?php
session_start();                     // WARNING : NE PAS EFFACER CETTE LIGNE
include("helpers/magasinHelper.php");// WARNING : NE PAS EFFACER CETTE LIGNE


$refProduit = $_GET["reference"];

// Je vérifie si le panier existe
if(!isset($panier)){
    $panier = [];
}
// Je vérifie si la référence est dans le panier

if(array_key_exists($refProduit, $panier)){
    if($panier[$refProduit] == 1){
        unset($panier[$refProduit]);
    }else{
        $panier[$refProduit] = $panier[$refProduit] - 1;
    }
}else{
    echo "pas dans le panier";
}

// Je teste la quantité. si q = 1, je supprime la référence
// sinon je décrémente la quantité









// Pas de code à vous après cette ligne
$_SESSION['panier'] = $panier; // WARNING : NE PAS EFFACER CETTE LIGNE
echo "<pre>";print_r($panier);echo "</pre>";die(1);  // Voila l'état actuel du panier. Supprimer cette ligne, dès que votre script marche


header('Location:magasin.php'); // je retourne voir le panier
?>