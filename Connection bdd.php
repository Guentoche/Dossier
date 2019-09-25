<?php
function connect()
{
    try {
        $link = new PDO('mysql:host=localhost:3307dbname=B3',
            'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br>";
        die();
    }
}

?>