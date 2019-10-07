<?php
include "connection.php";
$link= connect();
$id=$_GET['del'];
$sql="SELECT * FROM classe WHERE id= $id";
$stmt = $link->prepare($sql);
$stmt->execute();
$utilisateur = $stmt->fetch();
?>


<html>

<head>
	<title> Form Modification</title>
</head>

<body>

<form action="edit_user.php" method="POST">
	<input type="hidden" name ="numUtilisateur" value="<?=$utilisateur['id']?>">
        Nom: <input type="text" name ="nom" value= "<?= $utilisateur['nom']?>"/><br />
        Prénom: <input type="text" name ="prenom" value= "<?= $utilisateur['prenom']?>" /><br />
        Email: <input type="text" name ="email" value= "<?= $utilisateur['email']?>"/><br />
        <input type="submit" value ="Enregistrer les modifications" name="send" />

</form>

</body>
</html>