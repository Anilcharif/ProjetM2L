<?php
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['mail']) || !isset($_SESSION['URL'])) {
    // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
    header("Location: connexion.php");
    exit;
}

// Inclure les fichiers nécessaires
include_once("./src/data.inc.php");



// Rendre la variable userSession disponible pour app.js
echo '<script>const userSession = "' . $_SESSION['mail'] . '";</script>';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="apple-touch-icon" sizes="180x180" href="./asset/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./asset/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./asset/favicon/favicon-16x16.png">
    <link rel="icon" type= "image/ico" href="./asset/favicon/site.webmanifest">  
    <link rel="manifest" href="./asset/favicon/site.webmanifest">
        <title>Intranet</title>
</head>
<body>
    <header>
        <div>
            <a href="./connected.php"><img class="yes" src="./asset/intranet.png" alt="img">Intranet</a>
        </div>
        <div>
          
            <a href="./liste.php" class="Liste"><img class="yes" src="./asset/list_icon_128825.png" alt="img">Liste</a>
            <?php print '<img src="' . $_SESSION['URL'] . '" class="top">'?>
            <a href="./src/deconnexion.php" class="right"><img class="yes" src="./asset/se-deconnecter.png" alt="">Déconnexion</a>        
        </div>   
    </header>
    <main>
        <h1>Bienvenue sur l'intranet </h1>
        <p>La plate-forme de l'entreprise qui vous permet de retrouver tous vos collaborateurs</p>
        <section>
            <div class="left">
                <?php
                include_once("./src/connexion.php");
                echo '<img src="' . $_SESSION['URL'] . '" class="zeb">';
                ?>
            </div>
            <ul class="right">
                <li>
                    <?php
                    echo "<p class=\"nom\">" . $_SESSION['nom'] . " " . $_SESSION['prenom'] . "</p><p class=\"age\">(" . $_SESSION['age'] . " ans)</p>";
                    ?>
                </li>
                <li>
                    <?php
                    echo "<p class=\"pays\">". $_SESSION['Ville'] .",". $_SESSION['Pays']."</p>";
                    ?>
                </li>
                <li>
                    <?php
                    echo '<img src="./asset/message_mail_email_envelope_icon_220571.png" class="mail"> <p>' . $_SESSION['mail'] . '</p>';
                    ?>
                </li>
                <li>
                    <?php
                    echo '<img src="./asset/phone-handset_icon-icons.com_48252.png" class="phone"> <p>' . $_SESSION['tel'] . '</p>';
                    ?>
                </li>
                <li>
                    <?php
                    echo '<img src="./asset/birthdaycakewithcandles_79795.png" class="an"> <p>Anniversaire : ' . $_SESSION['mois'] . '</p>';
                    ?>
                </li>
            </ul>
            <p class="zeb">En ligne</p>
        </section>
    </main>

    <div class="center2">
        <a href="./liste.php" class="btn2">Dire Bonjour à quelqu'un d'autre</a>
    </div>

    <script defer src="./js/app.js"></script>

</body>
</html>
