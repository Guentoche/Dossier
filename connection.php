<?php
function connect() {
    try {
        return $link = new PDO('mysql:host=localhost:3307;dbname=essaie',
            'root', '');
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br>";
        die();
    }
}
