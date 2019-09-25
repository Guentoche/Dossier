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
    <input type="submit" value ="ok" name="send" />

</form>
<a href="exercice1.php">Lien vers une autre page</a>
<?php

try {
    $link = new PDO('mysql:host=localhost:3307;dbname=essaie',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
session_start();
if (isset($_SESSION['data'])) {
    $_SESSION['data'] = [];
}
if ( check($_POST) ) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];


//var_dump($nom, $prenom, $email);
    $sql = "INSERT INTO classe ( nom, prenom, email)
VALUES ( '$nom', '$prenom', '$email')";

    $stmt = $link->prepare($sql);
    $stmt->execute();
    header('Location: list_user.php');
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