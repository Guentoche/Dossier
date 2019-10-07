<?php
include 'connection.php';
$link=connect();
$sql='UPDATE classe set nom="$nom", prenom="$prenom", email="$email" WHERE id="$id"';
$stmt=$link->prepare($sql);

$stmt->bindValue('$id', $_POST['numUtilisateur'], PDO::PARAM_INT);
$stmt->bindValue('$nom', $_POST['nom'], PDO::PARAM_STR);
$stmt->bindValue('$prenom', $_POST['prenom'], PDO::PARAM_STR);
$stmt->bindValue('$email', $_POST['email'], PDO::PARAM_STR);/*
$nom= $_POST['nom'];
$prenom= $_POST['prenom'];*
$email=$_POST['email']*/

$executeIsok=$stmt->execute();

if($executeIsok){
	$message="Cet utilisateur a bien été mis a jour";

}
else {
	$message="Echec";
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<h1> Résultat de la modification</h1>
<p><?=$message?></p>

	<a href="lastchance.php">Liste des utilisateurs<br></a>
	<a href="Session2.php">Ajouter un utilisateur<br></a></body>
</html>