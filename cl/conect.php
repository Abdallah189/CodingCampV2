<?php
// Start the session
session_start();
?>
<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=coding;charset=utf8', 'root', '');
   } catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
   }

   $crypter=md5($_POST["pwd"]);
   $corr = $bdd->query('SELECT *FROM client');
   while($data=$corr->fetch()) {
    if (($data["login"]==$_POST["logi"])&&($data["pwd"]==$crypter)) {
      $_SESSION["nom"] =$data["Nom_client"];
      $_SESSION["cin"] =$data["Cin_Client"];
      $_SESSION["tel"] =$data["Tel_Client"];
      $_SESSION["score"] =$data["Coins"];
 
    }
    header("Location: services.php#"); 
}