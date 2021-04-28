<!DOCTYPE html>
<html lang="fr">
    <?php 
        include "./php/header.php";

    ?>
    
<body>
    <?php
        include "./php/navbar.php";
    ?>
    
    <div class="contenu"> <!--Contenu de la page accueil-->
        <?php
            include "./php/menu.php";
        ?>  
    
        <div class="panier">
            <?php
                if (!empty($_POST['label'])){   //Si il y un produit
                    if (!isset($_SESSION['achat'])){    //et qu'il n'y pas de tableau achat
                        $_SESSION['achat']=array(); // on le crée
                    }
                    $temp=array($_POST['label'], $_POST['nbr_produit']);
                    if ($_POST['nbr_produit']>0){   //Pour emepecher d'acheter 0 produits
                        array_push($_SESSION['achat'], $temp); //on rentre dans le tableau les produits achetés
                    }
                }
                echo "<h1>Récapitulatif de votre commande :</h1><br/>";
                echo "<h2>Titulaire</h2><br/>";
                $d1 = date("d/m (Y)");
                if (empty($_SESSION['username'])){
                    echo"Pensez à vous connecter avant de payer ;)"; //si pas connecter 
                }
                else{
                    echo "Commande passer le : $d1 par : ".$_SESSION['username']." </br>"; //si connecter affiche le nom et la date
                }
                echo "<h2>Vos Achats :</h2></br>";
                if (isset($_SESSION['achat']) && count($_SESSION['achat'])>0) { //les achats fait sur la sensation
                    echo " </br>Vous avez achetez les produits suivant :<br/> ";
                    foreach($_SESSION['achat'] as $produit ){
                        echo "<div>".$produit[0]."- ".$produit[1]."</div>";
                    }
                }
                else{
                    echo "Vous n'avez pas fais d'achat"; //si aucun achat fais sur la session
                }
                if (!empty($_SESSION['username'])){
                    echo"<br/><button class='product-button'>Passer au paiment</button>"; //si connecter bouton de paiment
                }
            ?>
        </div>
    </div>
    <?php 
        include "./php/footer.php";
    ?>
</body>
</html>