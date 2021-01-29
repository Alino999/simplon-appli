<?php
try {
    //connexion à la base de données
    $user = "root";
    $pass = "";
    $db = new PDO ("mysql:host=localhost; dbname=simplon-appli; charset=utf8", $user, $pass);
  } catch (Exception $th) {
    //afficher les erreures cache le mot de passe
    die("ERREUR: ".$th -> getMessage());
}
function ajaxRequest() {return !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'; }
?>
