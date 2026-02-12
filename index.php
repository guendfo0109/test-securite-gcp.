<?php
// Faille SQL Injection
$id = $_GET['id'];
$query = "SELECT * FROM users WHERE id = " . $id;

// Faille XSS
$nom = $_GET['nom'];
echo "<h1>Bienvenue " . $nom . "</h1>";
echo "<p>Requête générée : " . $query . "</p>";
?>
