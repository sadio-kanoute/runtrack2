<?php
// Infos de connexion
$host = 'localhost';
$username = 'root';
$password = ''; 
$database = 'jour09';

// Connexion MySQLi
$mysqli = new mysqli($host, $username, $password, $database);

// Vérifie si y’a une erreur
if ($mysqli->connect_error) {
    die('Erreur de connexion : ' . $mysqli->connect_error);
}
?>
