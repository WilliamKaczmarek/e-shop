<!DOCTYPE html>
<html lang="fr">
<head>
    <?php 
        include "./php/header.php";
    ?>
</head>
<body>

    <?php
    	if(!isset($connection)) {
            include "./php/connexionbdd.php";
        }
        include "./php/navbar.php";
    ?>
    <div class="contenu">
        
            <?php 
                include "./php/menu.php";
            ?>
        
        <div class="margin-contenu">
            <div class="display_block">
                <div class="content">
                    <?php 
                        

                        if (isset($_GET["categorie"])) {
                            $categorie =  $_GET["categorie"];
                        }else{
                            $categorie="Livre";
                        }
                        $req = "SELECT * FROM produits WHERE product_categories = '".$categorie."'";
                        $products = $connection->query($req);
                        echo "<div class='stock-button'><label  for='mycheck' >Stock</label><input id='mycheck' type='checkbox'  onclick='masquer()'></div>";
                        while ($produit = $products->fetch_row()) { 
                    
                            echo "
                            <form action='panier.php' method='POST'>
 
                            <div class='product-container'>
                                <div class='product-left'>
                                    <div class='product-ref'>ref: ".$produit[3]." 
                                        <div class='stock' style='display: none'>Stock : ".$produit[5]."</div> 
                                    </div>
                                    <input name='ref' style='display: none' value='".$produit[3]."' />
                                    <input name='label' style='display: none' value='".$produit[4]."' />
                                    <input name='prix' style='display: none' value='".$produit[7]."' />
                                    <img class='product-img' ".$produit[1]." />                                    
                                    <div class='button'>
                                        <div class='quantity'>
                                            <input type='button' class='moins' onclick='supp_stock(this)' value='-'>
                                            <input type='text' name='nbr_produit' id='quanti'  value='0' >
                                            <input type='button' class='plus' onclick='ajouter_stock(this)' value='+'>
                                        </div>
                                    </div>
                                    <button class='product-button' onclick=\"update_stock(this)\">Ajouter au panier</button>
                                </div>
                               
                                <div class='product-right'>
                                    <h3>".$produit[4]."</h3>
                                    <h2>€".$produit[7]."</h2>
                                    <p class='product-desc'>".$produit[6]."</p>
                                </div>                                       
                            </div>
                            </form>";
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php 
            include "./php/footer.php";
        ?>
    <script type="text/javascript" src="./js/produits.js"></script>
</body>
</html>