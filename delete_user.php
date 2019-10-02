<?php
include "connection.php";
$link=connect();
?>
<html>
<head>
    <title>Cet utilisateur a ete supprime</title>

    <a href="Session2.php">Ajouter un nouvel utilisateur</a>

    <a href="Session2.php">Modifier un utilisateur</a>
</head>
<body>
<?php
// lancement de la requête pour effacer un utilisateur
$sql ='DELETE from classe WHERE '; // Modifier afin de pouvoir supprimer le champ
?>
</body>
</html>