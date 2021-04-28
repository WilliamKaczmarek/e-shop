<!DOCTYPE html>
<html lang="fr">
    <?php 
        include "./php/header.php";
        if (isset($_GET["disconnect"])) {
            session_unset();
        }
    ?>
    
<body>
        <?php
            include "./php/navbar.php";
        ?>
    
    <div class="contenu"> <!--Contenu de la page accueil-->
        <?php
            include "./php/menu.php";
        ?>   
    </div>
    <?php
		function checkuser($username, $password)
		{
			$file = file_get_contents("data/users.txt");
			$data = explode("\n",$file); 
        foreach ($data as &$row) {
            $row = str_getcsv($row, ",");
            if ($username == $row[0] && hash("sha512", $password) == $row[1]) {
            	return true;
            }
        }
		}
            if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                if (checkuser($_POST["username"], $_POST["password"])) {
                $_SESSION["valid"] = true;
                $_SESSION["timeout"] = time();
                $_SESSION["username"] = $_POST["username"];         
                        echo "<script> alert(\"vous etes bien connecté en tant que ".$_SESSION["username"]."\")</script>";
                        header("Refresh:0");
                } else {
                        echo "<script> alert(\"username ou mot de passe incorect\")</script>";
                }

            }
            if (isset($_SESSION["username"])){
                echo "
                <form class='login' action='Login.php' method='GET' >
                <input
                    name='disconnect'
                    type='text'
                    style='display:none'
                />
                <button class='login-button' type='submit'>Déconnexion</button>
                </form>";
            }
            else{
                echo "
                <form class='login' action='Login.php' method='POST' >
                <input
                    name='username'
                    type='text'
                    placeholder='Username'
                    class='login-placeholder'
                />
                <input
                    name='password'
                    type='password'
                    placeholder='Ton mot de passe'
                    class='login-placeholder'
                />
                <br/>
                <button class='login-button' type='submit'>Connexion</button>
                </form>
                ";
            }

	?>
        
            <?php
            include "./php/footer.php";
        ?>
    </body>
</html>