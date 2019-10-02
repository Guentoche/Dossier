<?php
include "connection.php";
$link=connect();
?>
<html>
<head>
    <title>Modification d'un utilisateur</title>
</head>
<body>
<?php
// lancement de la requête
$sql ='UPDATE classe SET nom = $nom, prenom = $prenom, age = $age WHERE nom="Benoît"';

?>
// L'utilisateur a bien été modifié
</body>
</html>