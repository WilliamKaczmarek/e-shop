<?php
include "connexionbdd.php";
$file_content = file_get_contents("../js/produits.json"); //on cherche le fichier json contenant tout nos produits
$product_data = json_decode($file_content); //on le decode dans la variable $product_data

foreach ($product_data->categories as $categorie) { //pour chaque catégorie on rempli la colonne avec le bon contenu
	foreach ($categorie->produits as $product) {
		$req = "INSERT INTO Produits (
			product_img_rel,
			product_categories,
			product_ref,
			product_label,
			product_stock,
			product_desc, 
			product_prix)
		VALUES (
			'" . $product->img . "',
			'" . $categorie->nom_categorie . "',
			'" . $product->ref . "',
			'" . $product->label . "',
			" . $product->stock . ",
			'" . $product->desc . "',
			" . $product->prix . ")";
		if (mysqli_query($connection, $req)) {
			echo "objet " . $product->label . "\n";
		} else {
			echo "error on product " . $product->label . "\n";//en cas d'erreur de remplissage on indique quel produit à poser prob
			echo mysqli_error($connection);
		}
	}
}
