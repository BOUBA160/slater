<?php
// Connexion à la base de données
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtest";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}*/
require "connect.php";




// Insertion des données dans la base de données
$sql = "SELECT * FROM user";
$resultat = $conn->query($sql);

  // Afficher les données de chaque ligne
    while($row = $resultat->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nom: " . $row["nom"]. " - Email: " . $row["email"]." - message: " . $row["message"]. "<br>";
               echo "<p>ID: " . $row["id"] . "</p>";
                echo "<p>- Nom: " . $row["nom"]."</p>";
                echo "<p>- Email: " . $row["email"]. "</p>";
                echo "<p>- message: " . $row["message"] . "</p>";
                echo "<hr>";
    }

