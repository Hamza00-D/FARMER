<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THE_FARMER</title>
    <link rel="stylesheet" href="css/styles.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <section class="top-page">
        <header class="header">
            <img src="images/logo1-re.png" alt="Logo du site">
            <nav class="nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="recrutement.php">Recrutement</a></li>
                <li><a href="forum.php">Forum</a></li>
                <li><div class="box">
	                    <a class="button" href="#popup1">Compte</a>
                    </div>
                    <div id="popup1" class="overlay">
	                    <div class="popup">
                            <div id="container">
                                <form action="verification.php" method="POST">
                                    <h2>Connexion</h2>
                                    <a class="close" href="#">&times;</a>

                                    <section class="info-compte">
                                        <input type="text" placeholder="Email" name="username" required>
                                        <input type="password" placeholder="Mot de passe" name="password" required>
                                        <input type="submit" id='submit' value='VALIDER' >

                                        <?php
                                        if(isset($_GET['erreur'])){
                                            $err = $_GET['erreur'];
                                            if($err==1 || $err==2)
                                                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                                        }
                                        ?>
                                    </section>
                                </form>
                            </div>

                            <section class="pas-membre">
                                <p class="membre">Si vous n'avez pas de compte. <a href="inscription.html">Rejoignez-nous</a></p></p>
                            </section>

	                    </div>
                    </div>
                </li>
            </nav>
        </header>
        
    </section>
    
    
    
    <footer>
        <p class="copyright">&copy; 2022 - Ban Be</p>
    </footer>

</body>
</html>