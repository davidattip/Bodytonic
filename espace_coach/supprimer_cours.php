<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pa";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Traitement de la requête POST pour supprimer un cours
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courseID = $_POST["courseID"];

    // Suppression du cours de la base de données
    $sql = "DELETE FROM cours WHERE id = '$courseID'";

    if ($conn->query($sql) === TRUE) {
        echo "Le cours a été supprimé avec succès.";
    } else {
        echo "Erreur lors de la suppression du cours : " . $conn->error;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
