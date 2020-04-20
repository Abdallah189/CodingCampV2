<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
var_dump($_POST["effect"]);
var_dump($_POST["nn"]);
$eff=$_POST["effect"];
$e=$_POST["nn"];
$req = "UPDATE `company` SET `categorie` = '$eff' WHERE `company`.`MatriculeFiscale` = '$e'";
$bdd->query($req);

header("Location: apps-team%20_ensi.php"); 