<?php
$user = 'root';
$pass = '';
$db_conn = new PDO('mysql:host=localhost;dbname=rn20', $user, $pass);

// hier komt code om een record (rij) uit de database te verwijderen
$sql = 'DELETE FROM auto WHERE id = ' . $_GET['id'];

$statement = $db_conn->prepare($sql);
$statement->execute();

// Hier komt code om na het verwijderen te redirecten naar overzicht.php
header("Location: overzicht.php/");
?>