<?php 

// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "m2l");

if(isset($_POST['submit'])) {
    $id = $user['id']; // récupérer l'ID de l'utilisateur à modifier à partir du formulaire
    $civilite = $_POST['Civilite'];
    $categorie = $_POST['Categorie'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['mail'];
    $tel = $_POST['tel'];
    $birthdate = $_POST['Birthdate'];
    $ville = $_POST['Ville'];
    $pays = $_POST['Pays'];
    $url = $_POST['URL'];

    // Valider les champs du formulaire
    if(empty($civilite) || empty($categorie) || empty($nom) || empty($prenom) || empty($email) || empty($tel) || empty($birthdate) || empty($ville) || empty($pays) || empty($url)) {
        echo "<p class='warning'>Veuillez remplir tous les champs.</p>";
    } else {
        $req = mysqli_prepare($connexion, "UPDATE inscription SET Civilite=?, Categorie=?, nom=?, prenom=?, mail=?, tel=?, Birthdate=?, Ville=?, Pays=?, URL=? WHERE id=?");
        mysqli_stmt_bind_param($req, 'ssssssssssi', $civilite, $categorie, $nom, $prenom, $email, $tel, $birthdate, $ville, $pays, $url, $id);
        mysqli_stmt_execute($req);

        if(mysqli_affected_rows($connexion) > 0) {
            echo header("Location: ../PROJETM2L/liste.php");
        } else {
            echo "Erreur lors de la mise à jour des informations de l'utilisateur.";
        }

        mysqli_stmt_close($req);
    }
}




/* Le code se connecte à une base de données MySQL en utilisant les informations de connexion fournies : nom d'hôte ("localhost"), nom d'utilisateur ("root"), mot de passe ("") et nom de la base de données ("m2l").
Si le formulaire est soumis (l'utilisateur a cliqué sur le bouton "submit"), les données du formulaire sont récupérées. Les informations de l'utilisateur à mettre à jour comprennent son ID, sa civilité, sa catégorie, son nom, son prénom, son adresse e-mail, son numéro de téléphone, sa date de naissance, sa ville, son pays et son URL.
Les champs du formulaire sont validés pour s'assurer qu'ils ne sont pas vides. Si un champ est vide, un message d'avertissement est affiché.
Si tous les champs sont remplis, une requête SQL de mise à jour est préparée à l'aide de la fonction "mysqli_prepare". La requête utilise les paramètres de substitution "?" pour les valeurs qui seront fournies ultérieurement.
Les valeurs des champs du formulaire sont liées aux paramètres de la requête préparée à l'aide de la fonction "mysqli_stmt_bind_param". Les types de données et les variables sont spécifiés dans l'ordre approprié.
La requête est exécutée à l'aide de la fonction "mysqli_stmt_execute". */