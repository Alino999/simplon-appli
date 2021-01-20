<?php
require_once "connexion.php";
$recuperation = $db ->query("SELECT * FROM apprenants ORDER BY nom");
?>