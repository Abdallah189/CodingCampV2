<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root',
    '');
     } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    var_dump($_POST);
     // On récupère les données du formulaire
   /* $nom=$_POST['name'];
    $cat=$_POST['category-color'];
    // On ajoute une entrée dans la table personne
    $bdd->exec("INSERT INTO `services` (`Service_ID`, `Service_Name`, `cat`) VALUES (NULL, '$nom', '$cat')");
    header("Location: apps-calendar.php"); 