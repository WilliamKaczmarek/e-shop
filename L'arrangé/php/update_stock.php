<?php
	include "connexionbdd.php";

	if (isset($_POST["ref"])) { //si ref existe on recup la quantité et la ref des produits
		$ref = $_POST["ref"];
		$qty = $_POST["qty"];
		$req = "SELECT product_stock FROM Produits WHERE product_ref = '".$ref."'"; //on se place dans la bdd sur le produit en Question
	    $qty_max = $connection->query($req);//on verif la quantité maximun du produit dans la bdd
	    echo mysqli_error ($connection);
	    $qty_max = $qty_max->fetch_row()[0];

	    $new_qty = $qty_max - $qty;
		//ci-dessous on MAJ la bdd avec la quantité restante du produits en question
	    $req = "UPDATE Produits 
	    		SET product_stock = ".$new_qty." 
	    		WHERE product_ref = '".$ref."'";
	    $connection->query($req);
	    echo mysqli_error ($connection);
	}




?>