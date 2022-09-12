<?php
$bddUser = "xav03";
$bddMDP = "123456";


//Connection à la BDD

try {
        $db = new PDO('mysql:host=localhost;dbname=colyseum;charset=utf8', $bddUser, $bddMDP);
} catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
}
