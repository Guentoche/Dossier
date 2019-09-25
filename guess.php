<?php
SESSION_START();
if (!isset($_SESSION['nb'])){
    $_SESSION['essaie']=1;
    $_SESSION['nb']=rand(0,1000);
}
echo $_SESSION['nb'];
if (isset($_POST['send'])){
    if ($_SESSION['nb'] > $_POST['nb']){
        echo " Trop petit";
        $_SESSION['essaie']++;
    }
    elseif ($_SESSION['nb'] < $_POST['nb']){
        echo " Trop grand";
        $_SESSION['essaie']++;
    }
    elseif ($_SESSION['nb'] == $_POST['nb']){
        echo " Bravo, vous avez trouve en ". $_SESSION['essaie']." essai(s)";
    }
}

?>

<html>
<head></head>
<body>
<form action ="" method="POST">
    <input type="texte" name="nb"/>
    <input type="submit" name="send" value="tester"/>
</form>
</body>

</html>