<?php 

if (!isset( $_SESSION["username"])){
echo "
<header>
        <div id='header-title-link'>
            <a  href='index.html' target='_self'>
                <img src='img/logo.png' alt='ImgLogo' id='navImg'></img>
                <div id='navTitle'>
                    <h1>L'Arrangé</h1>
                </div>
                
            </a>
        </div><!--Menu horrizontal-->
        <div id='navMenu'>
            <div class='navButtons'>
            <a href='Index.php' class='navButton'>Accueil</a>                     
            <a href='produits.php?categorie=Livre' class='navButton'>Nos livres</a>                    
            <a href='produits.php?categorie=Kit' class='navButton'>Nos Kits d'ingrédients</a>                    
            <a href='produits.php?categorie=Accessoire' class='navButton'>Verrerie et accessoire</a>
            <a href='Login.php' class='navButton'>connexion</a>
            <a href='Contact.php' class='navButton'>Contactez-nous</a>
            </div>
        </div>
    </header>
";
}else{
echo "
<header>
        <div id='header-title-link'>
            <a  href='index.html' target='_self'>
                <img src='img/logo.png' alt='ImgLogo' id='navImg'></img>
                <div id='navTitle'>
                    <h1>L'Arrangé</h1>
                </div>
                
            </a>
        </div><!--Menu horrizontal-->
        <div id='navMenu'>
            <div class='navButtons'>
            <a href='Index.php' class='navButton'>Accueil</a>                     
            <a href='produits.php?categorie=Livre' class='navButton'>Nos livres</a>                    
            <a href='produits.php?categorie=Kit' class='navButton'>Nos Kits d'ingrédients</a>                    
            <a href='produits.php?categorie=Accessoire' class='navButton'>Verrerie et accessoire</a>
            <a href='panier.php' class='navButton'>Panier</a>
            <a href='Login.php?disconnect' class='navButton'>".$_SESSION['username']."<br/>Deconnexion</a>
            <a href='Contact.php' class='navButton'>Contactez-nous</a>
            </div>
        </div>
    </header>
";
}
?>