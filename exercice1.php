<html >
<h1 style="text-align: center">Liste des utilisateurs présents dans la base</h1>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body>
</body>
</html>
<?php

try {
    $link = new PDO('mysql:host=localhost:3307;dbname=essaie',
        'root', '');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br>";
}
$sql = "SELECT * FROM messages";

$stmt = $link->prepare($sql);
$stmt->execute();

$result = $stmt->fetchAll();
print_r($result);
?>
