<html>
    <h1>Ajoutez un utilisateur</h1>
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css" />
    </head>
    <body>

    <form action="" method="POST">
        Nom: <input type="text" name ="nom" /><br />
        Prénom: <input type="text" name ="prenom" /><br />
        Email: <input type="text" name ="email" /><br />
        <input type="submit" value ="Envoyer" name="send" />

    </form>

    <a href="exercice1.php">Liste des utilisateurs</a> 
    
    <?php
    
        include "connection.php";
        $link=connect();

        session_start();

        if (isset($_SESSION['data'])) {
            $_SESSION['data'] = [];
        }

        if ( check($_POST) ) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];

            $sql = "INSERT INTO classe ( nom, prenom, email) VALUES ( '$nom', '$prenom', '$email')";

            $stmt = $link->prepare($sql);
            $stmt->execute();
            header('Location: exercice1.php'); //Fichier Liste d'utilisateur
        }
        die();

    ?>

    </body>
</html>
<?php

function check($post)
{
    if (isset($post['send'])) {
        if (!empty($post['nom']) && !empty($post['prenom']) && !empty($post['email'])) {
            return true;
        }
        return false;
    }
    return false;
}
?>