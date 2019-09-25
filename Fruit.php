<?php
$panier = array('banane','pomme','fraise','cerise');
$caractere ="a";
foreach($panier as $fruit){
    if(stristr($fruit,$caractere)== true){
        echo $fruit.'<br/>';
    }

}

