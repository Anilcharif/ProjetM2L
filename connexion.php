<?php
    session_start();
    include_once("./src/data.inc.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Intranet</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/hearder.css">
    <title>Document</title>
</head>
<body>
    <header>
    <div>
            <a href="./inscription.php"><img class="yes" src="./asset/intranet.png" alt="img">Internet</a>
        </div>
        <div>
            <a href="./connexion.php" class="right"><img class="yes" src="./asset/porte connection.png" alt="">Connection</a>
        </div>   
    </header>
	<main>
    <h1>Connexion </h1>
    <p class="down">Pour Vous connecter a l'intranet, entrez votre identifiant et mot de passe.</p>
        <form method="post"> 
            <label>Mail ou login*
                <input type="email" name="mail" aria-labelledby="email"  id="email" placeholder="Mail Utilisateur" aria-required="true" autofocus>
            </label>
            <label>Mot de passe*
                <input type="password" name="psw" aria-labelledby="password" id="password" placeholder="Mot de passe" aria-required="true">
            </label>
            <input type="submit" aria-label="Envoyer" value="CONNECTION A VOTRE COMPTE" id="ex">
        </form>
        <?php
                     //inclusion
                    include_once "./src/connexion.php";
                 ?>
    </main>
    <footer>

    </footer>
</body>
</html>