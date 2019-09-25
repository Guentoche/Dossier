<?php

try {
    $link = new PDO('mysql:host=localhost:3307dbname=B3',
        'root', '');
} catch (PDOException $e) {}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$sql= "INSERT INTO classe (ID,Nom,Prénom,Email) VALUES (NULL ,'$nom', '$prenom' , '$email')";
$stmt=$link->prepare($sql);
$stmt->execute();
SESSION_START();
if(!isset($_SESSION['data'])){
    $_SESSION['data']=[];
    }
if(check($_POST)) {
    //$nom = [$_POST['nom'], $_POST['prenom'], $_POST['email']];
    //var_dump($nom);
}
?>
<html>
    <head></head>
    <body>
        <form action="" method="POST">
            <label>Nom:</label><input type="text" name="nom"><br/>
            <label>Prenom:</label><input type="text" name="prenom"><br/>
            <label>Email:</label><input type="text" name="email"><br/>
            <input type="submit" name="send" value="Enregistrer"/>
        </form>
    </body>
</html>
<?php
function check($post){
    if(isset($post['send'])){
        if(!empty($post['nom']) && !empty($post['prenom']) && !empty($post['email'])){
            return true;
        }

        return true;
    }
    return false;
}