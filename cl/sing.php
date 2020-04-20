<?php
var_dump($_POST);
require 'classes/client.class.php';
$cin=$_POST['cin'];
$nom=$_POST['name'];
$date = $_POST['date'] ;
$tel=$_POST['tel'];
$mdp=$_POST['pwd'];
$logi = $_POST['logi'] ;
$crypter=md5($mdp);

// On ajoute une entrée dans la table personne
$client = new client();
$client->createclient($nom,$cin,$date,$tel,$logi,$crypter);
//echo "<script>alert(\"Votre demander a eté effectuer .\");</script>" ;
var_dump($client);
header("Location: index.php"); 
?>