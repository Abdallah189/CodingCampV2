<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }
   var_dump($_GET["id"]);
   $e=$_GET["id"];
 $bdd->exec("DELETE FROM client WHERE `client`.`Cin_Client`= '$e'");
 header("Location: apps-team.php"); 