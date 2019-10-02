<?php
include "connection.php";
$link=connect();
$sql = "SELECT * FROM messages";

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
                <table border="1" width="50%">
                    <tr>
                        <th>Nom</th>
                        <th width="20%">Action</th>
                    </tr>
                    <?php foreach ($result as $result) { ?>
                        <tr>
                            <td><?php echo $result['nom']; ?></td>
                            <td>
                               // <a href="delete_user.php">Supprimer un utilisateur</a>
                                //<a href="edit_user.php">Modifier un utilisateur</a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
                <a href="Session2.php">Ajouter un utilisateur</a>
            </div>
        </div>
    </div>
</body>
</html>