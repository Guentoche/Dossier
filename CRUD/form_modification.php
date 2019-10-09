<?php
include "connection.php";

session_start();

$link = connect();
var_dump($_POST);
if (isset($_SESSION['id']))
{
    $id = $_SESSION['id'];
    $data = $link->query("SELECT * FROM classe WHERE id = " . $id)->fetch();
    var_dump($data);
    $nom = $data['nom1'];
    $prenom = $data['prenom1'];
    $email = $data['email1'];

}else{
    echo "Vous avez modifié aucun visiteur ";
}
if (isset($_POST['envoyer'])) {
    $sql = "UPDATE classe SET nom = '".$_POST['nom1']."', prenom = '".$_POST['prenom1']."', email = '".$_POST['email1']."' WHERE id = $id"; // $id vaut 6 je ne sais pas pourquoi.
    var_dump($sql);
    $link->exec($sql);
    var_dump($_POST);
    $nom = $_POST['nom1'];
    $prenom = $_POST['prenom1'];
    $email = $_POST['email1'];
    //header('Location: exercice1.php');
}



?>


<html>

<head>
	<title> Form Modification</title>
</head>

<body>

<form action="" method="POST"> 
		Nom: <input type="text" name="nom1" class="form-control" value="<?php echo $nom; ?>"/>
        Prénom: <input type="text" name="prenom1" class="form-control" value="<?php echo $prenom; ?>"/>
        Email: <input type="email" name="email1" class="form-control" value="<?php echo $email; ?>"/>
        <input type="submit" value ="Enregistrer les modifications" name="envoyer" />

</form>
<a href="exercice1.php">Liste des utilisateurs<br></a>
<a href="Session2.php">Ajouter un utilisateur<br></a>
</body>
</html>