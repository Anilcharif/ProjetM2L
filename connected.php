<?php
    session_start();
    // Vérifier si l'utilisateur est connecté

    
    if (!isset($_SESSION['nom']) || !isset($_SESSION['URL'])) {
        // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
        header("Location: connexion.php");
        exit;
    }
    
    // Inclure les fichiers nécessaires
    include_once("./src/data.inc.php");
?>




<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Intranet</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="./css/hearder.css">
</head>
<body>
    <header>
        <div>
            <a href="./inscription.php"><img class="yes" src="./asset/intranet.png" alt="img">Internet</a>
        </div>
        <div>
            <a href="./connexion.php" class="right"><img class="yes" src="./asset/porte connection.png" alt="">Deconnexion</a>
        </div>   
    </header>
	<main>
    <h1>Bienvenue sur l'intranet</h1>
        <p>La plate-forme de l'entreprise qui vous permet de retrouver tout vos colaborateurs</p>
        <section>
            <div class="left">
            <?php
                include_once("./src/connexion.php");
                echo '<img src="' . $_SESSION['URL'] . '" class="zeb">'?>
            </div>
            <ul class="right">
                <li><?php echo "<p class=\"nom\">" . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "</p><p class=\"age\">(" . $_SESSION['age'] . " ans)</p>"; ?></li>
                <li><?php echo "<p class=\"pays\">". $_SESSION['Ville'] .",". $_SESSION['Pays']."</p>"; ?></li>
                <li><?php echo '<img src="./asset/message_mail_email_envelope_icon_220571.png" class="mail"> <p>' . $_SESSION['mail'] . '</p>'; ?></li>
                <li><?php echo '<img src="./asset/phone-handset_icon-icons.com_48252.png" class="phone"> <p>' . $_SESSION['tel'] . '</p>'; ?></li>
                <li><?php echo '<img src="./asset/birthdaycakewithcandles_79795.png" class="an"> <p>Anniversaire : ' . $_SESSION['mois'] . '</p>'; ?></li>
            </ul>
            <p class="zeb">abc</p>
        </section>
    </main>
</body>
</html>