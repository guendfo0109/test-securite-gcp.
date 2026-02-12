<?php
// On récupère une donnée directement de l'URL (très dangereux)
$id = $_GET['id']; 

// 1. Faille SQL : La donnée est mise directement dans la requête
$query = "SELECT * FROM users WHERE id = " . $id; 

// 2. Faille XSS : On affiche la donnée sans la nettoyer
echo "<h1>Profil de l'utilisateur : " . $id . "</h1>"; 

echo "Analyse en cours...";
?>
