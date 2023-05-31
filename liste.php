<?php
    session_start();
    include_once("./src/data.inc.php");
    include_once("./src/session.php");
    
    if (!isset($_SESSION['nom']) || !isset($_SESSION['URL'])) {
        // Si l'utilisateur n'est pas connecté, rediriger vers la page de connexion
        header("Location: connexion.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/list.css">
    <link rel="stylesheet" href="./css/home.css">

    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <a href="./connected.php"><img class="yes" src="./asset/intranet.png" alt="img">Internet</a>
        </div>
        <div>
        <a href="./liste.php" class="Liste" id="Liste"><img class="yes" src="./asset/list_icon_128825.png" alt="img">Liste</a>
        <a href="./connected.php"><?php echo '<img src="' . $_SESSION['URL'] . '" class="top">'?></a>
        <a href="./src/deconnexion.php" class="right"><img class="yes" src="./asset/se-deconnecter.png" alt="">Déconnexion</a>
        </div>   
    </header>
    <h1 class=titre >Liste des collaborateurs</h1>
    <main>
        
    <div class="search-bar">
        <input type="text" id="search-input" placeholder="Recherche...">
    </div>
    <div class="search-bar">
        <label for="search-by">Rechercher par :</label>
        <select id="search-by">
            <option value="nom">Nom</option>
        </select>
    </div>
    <div class="search-bar">
        <label for="search-by">Categorie:</label>
        <select id="search-by">
            <option value="categorie">Aucun</option>
        </select>
    </div>


    <?php
            // Loop through the results and display each user's name
            foreach ($result as $user) {
                    
                    $date = $user['Birthdate'];
                    $date_format = date('F jS', strtotime($date));
                    $user['mois'] = $date_format;
                    $user['aj'] = date('Y-m-d');
                    $birthdate = new DateTime($user['Birthdate']);
                    $today = new DateTime($user['aj']);
                    $age = $birthdate->diff($today);
                    $user['age'] = $age->y;


                    $color = '';

                    if ($user['Categorie'] == 'Client') {
                        $color = 'vert'; // assign green color to clients
                      } elseif ($user['Categorie'] == 'admin') {
                        $color = 'rouge'; // assign red color to administrators
                      } elseif ($user['Categorie'] == 'technicien') {
                        $color = 'blue'; // assign blue color to administrators
                      } elseif ($user['Categorie'] == 'commercial') {
                        $color = 'yellow'; // assign yellow color to administrators
                      } elseif ($user['Categorie'] == 'Manager') {
                        $color = 'orange'; // assign orange color to administrators
                      }
                    


                echo "
                <section data-uid=" . $user['id'] . ">
                <div class=\"left\">
                <img src=\"" . $user['URL'] . "\" class=\"zeb\">
                </div>

                <div>
                <ul class=\"right\" >

                <li> <p class=\"nom\">" . $user['nom'] . " " . $user['prenom'] . "</p><p class=\"age\">(" . $user['age'] . " ans) </p> </li>
                <li> <p class=\"pays\">". $user['Ville'] .",". $user['Pays']."</p> </li>
                <li> <img src=\"./asset/message_mail_email_envelope_icon_220571.png\" class=\"mail\"> <p>".$user['mail']."</p> </li>
                <li> <img src=\"./asset/phone-handset_icon-icons.com_48252.png\" class=\"phone\"> <p>".$user['tel']."</p> </li>
                <li> <img src=\"./asset/birthdaycakewithcandles_79795.png\" class=\"an\"> <p>".$user['mois']."</p> </li>
                
                </ul>
                <p class=\"$color\" id=\"zeb\">". $user['Categorie'] ."</p>
                </div>
                </section>

                
                ";
            }

        ?>
    </main>
    <script defer src="./js/app.js"></script>
</body>
</html>



    



       