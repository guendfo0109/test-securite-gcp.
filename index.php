<?php
// Simulation d'une page de profil utilisateur vulnérable

$user_id = $_GET['id']; // Donnée non nettoyée

// 1. Faille XSS (Cross-Site Scripting)
echo "<h1>Profil de l'utilisateur : " . $user_id . "</h1>";

// 2. Faille d'Injection SQL (Simulation)
$conn = mysqli_connect("localhost", "db_user", "db_password", "database");
$query = "SELECT * FROM users WHERE id = " . $user_id; 
$result = mysqli_query($conn, $query);

echo "<p>Recherche effectuée dans la base de données.</p>";
?>
