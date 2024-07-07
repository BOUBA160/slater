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

// Récupération des données du formulaire
$nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];


// Insertion des données dans la base de données
$sql = "INSERT INTO user (nom, email, message) VALUES ('$nom', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Le client a été ajouté avec succès.";
    header('Location:vue.php');
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
    header('Location:form.php');
}
