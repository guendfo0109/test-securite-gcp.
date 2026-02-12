<?php
// Simulation d'une connexion SQL pour que le robot voit une cible
$conn = mysqli_connect("localhost", "db_user", "db_password", "fake_db");

// RÉCUPÉRATION D'UNE DONNÉE UTILISATEUR (La source du danger)
$user_id = $_GET['id']; 

// 1. FAILLE SQL INJECTION (La plus grave)
// On insère directement la variable sans protection dans la requête
$sql = "SELECT username, email FROM users WHERE id = " . $user_id;
$result = mysqli_query($conn, $sql);

// 2. FAILLE XSS (Cross-Site Scripting)
// On réaffiche la donnée brute dans la page HTML
echo "<h1>Bienvenue, utilisateur n°" . $user_id . "</h1>";

// 3. FAILLE D'INCLUSION DE FICHIER (Optionnel)
if (isset($_GET['page'])) {
    include($_GET['page'] . ".php");
}

while($row = mysqli_fetch_assoc($result)) {
    echo "Email: " . $row["email"];
}
?>
