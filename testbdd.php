<?php
$nom="pignouf";
$prenom="arouf";
$mail="arouf";
/*$dsn = 'mysql:host=localhost; dbname=b3';
$user='root';
$password='';*/
try {
    $bdd = new PDO ( $dsn , $user , $password );
}
catch(PDOException $e){}
$req = $bdd->prepare('INSERT INTO Classe(ID, Nom, Prénom, Email) VALUES(NULL, :nom, :prenom, :email)');
$req->execute(array('nom' => $nom,'prenom' => $prenom,'email' => $email));

echo 'Ca a bien été ajouté !';
?>