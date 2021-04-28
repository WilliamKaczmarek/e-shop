<!DOCTYPE html>
<html lang="fr">
    <?php 
        include "./php/header.php";
    ?>
    
<body>
        <?php
            include "./php/navbar.php";
        ?>
    
    <div class="contenu">

        <?php
            include "./php/menu.php";
        ?>
        <div class="margin-contact">
            <form class="contact" action="contact.php" method="post" enctype="text/plain" onsubmit="return validate_form()">
                <div>
                    <p class="contact-stack-3">
                        <label for="prenom">Prénom</label><br>
                        <input class="contact-placeholder" 
                            type="text"
                            name="prenom"
                            placeholder="votre prénom"
                            pattern="[a-zA-ZéèêiëîïàùÉÈÊËÀÏÎ]+$"
                            required
                        />
                    </p>
                
                    <p class="contact-stack-3">
                        <label for="nom">Nom de famille</label><br>
                        <input class="contact-placeholder"
                            type="text"
                            name="nom"
                            placeholder="Votre nom de famille"
                            pattern="[a-zA-ZéèêiëîïàùÉÈÊËÀÏÎ]+$"
                            required
                        />
                    </p>
                               
                    <p class="contact-stack-3">
                        <label for="mail">Adresse e-mail</label><br>
                        <input class="contact-placeholder"
                            type="text"
                            name="mail"
                            placeholder="Votre adresse e-mail"
                            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                            required
                        />
                    </p>
                </div>


                <div >
                    <p class="contact-placeholder" style="margin-left: 2%;" >
                        <label for="sexe">Sexe</label><br>
                        <input class="contact-radio"
                            type="radio"
                            name="sexe"
                            required
                        />Homme<br>
                        <input class="contact-radio"
                            type="radio"
                            name="sexe"
                            required
                        />Femme<br>

                        <input class="contact-radio"
                            type="radio"
                            name="sexe"
                            required
                        />Autre<br>
                    </p>
                </div>

                <div class="contact-stack-2">    
                    <div class="contact-placeholder" style="margin-left: 2%;">
                        <label for="metier">Secteur du métier :</label>
                        <select name="metier" id="metier" class="contact-select" >
                            <option value="agriculture">Agriculture</option>
                            <option value="agroalimentaire">Agroalimentaire</option>
                            <option value="animaux">Animaux</option>
                            <option value="architecture">Architecture</option>
                            <option value="artisanat">Artisanat - Métier d'art</option>
                            <option value="banque">Banque - Assurance - Finance</option>
                            <option value="batiment">Bâtiment - Travaux publics</option>
                            <option value="biologie">Biologie - Chimie</option>
                            <option value="commerce">Commerce - Immobilier</option>
                            <option value="communication">Communication - Information</option>
                            <option value="culture">Culture - Spectacle</option>
                            <option value="defense">Défense - sécurité - Secours</option>
                            <option value="droit">Droit</option>
                            <option value="edition">Edition - Imprimerie - Livre</option>
                            <option value="informatique">Informatique - Electronique</option>
                            <option value="enseignement">Enseignement - Formation</option>
                            <option value="environnement">Environnement - Nature - Nettoyage</option>
                            <option value="gestion">Gestion - Audit - Ressources Humaines</option>
                            <option value="hotellerie">Hôtellerie - Restauration - Tourisme</option>
                            <option value="humanitaire">Humanitaire</option>
                            <option value="industrie">Industrie - Matériaux</option>
                            <option value="lettres">Lettres - Sciences Humaines</option>
                            <option value="mecanique">Mécanique - Maintenance</option>
                            <option value="numerique">Numérique - Multimédia - Audiovisuel</option>
                            <option value="sante">Santé</option>
                            <option value="sciences">Sciences - Maths - Physique</option>
                            <option value="secretariat">Secrétariat - Accueil</option>
                            <option value="social">Social - Services à la personne</option>
                            <option value="soins">Soins - Esthétique - Coiffure</option>
                            <option value="sport">Sport et animation</option>
                            <option value="transport">Transport - Logistique</option>
                            <option selected value="autre">Autres</option>
                        </select>
                    </div>
                </div>
                              
                <div class="contact-stack-2 contact-placeholder" style="margin-left: 2%;">
                    <label for="date de naissance">Date de naissance</label><br>
                    <input class="contact-placeholder"
                        type="date"
                        name="date de naissance"
                        min="1900-01-01"
                        max="2010-12-31"
                        required
                    />
                </div>
                    
                <div>
                    <label for="contenu">Message</label><br>
                    <textarea  class="contact-message" rows="7" cols="88" name="contenu" placeholder="Votre message" required></textarea>
                </div>

                <div>
                    <input class="contact-button"
                        type="submit"
                        name="submit"
                        value="Submit"
                    />
                </div>
            </form>
        </div>    
    </div> 	
    <?php
        include "./php/footer.php";
 
    ?>
    <script src="js/form.js" ></script>

</body>
</html>


