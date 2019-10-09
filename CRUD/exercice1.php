<?php
include "connection.php";
$link=connect();
$sql = "SELECT * FROM classe";

$stmt = $link->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
//print_r($result);
?>

<html >
<h1 style="text-align: center">Liste des utilisateurs présents dans la base</h1>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Liste des users</h1>
                <table border="2" width="70%">
                    <tr>
                        <th>Nom</th>
                        <th width="30%">Action</th>
                    </tr>
                    <?php foreach ($result as $user) { ?>
                        <tr>
                            <td><?php echo $user['nom']; ?></td>
                            <td>
                                <a href="user_delete.php?del=<?= $user['id'] ?>">Supprimer un utilisateur <br></a>
                                <a href="form_modification.php?id=<?=$user['id']?>">Modifier un utilisateur<br></a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <a href="Session2.php">Ajouter un utilisateur</a>
            </div>
        </div>
    </div>
</body>
</html>s