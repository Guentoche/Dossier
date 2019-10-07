
<html>
<head>
	<h1> L'utilisateur a bien été supprimé</h1>
	<title></title>
</head>
<body>
	<?php
		include "connection.php";
		$link =connect();
		if (isset($_GET['del'])){
			$id=$_GET['del'];
			$sql = "DELETE FROM classe WHERE id='$id' LIMIT 1";
			$stmt = $link->prepare($sql);
			$stmt->execute();
		}
	?>

	<a href="lastchance.php">Liste des utilisateurs<br></a>
	<a href="Session2.php">Ajouter un utilisateur<br></a>
</body>
</html>