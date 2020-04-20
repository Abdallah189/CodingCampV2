<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root',
    '');
     } catch(Exception $e) { die('Erreur : '.$e->getMessage()); }
    // On récupère les données du formulaire
    $nom=$_POST['name'];
    var_dump($date);
    // On ajoute une entrée dans la table personne
    $bdd->exec("INSERT INTO categorie (Categorie_ID, Categorie_Name) VALUES (NULL, '$nom')");
    header("Location: apps-calendar.php"); 