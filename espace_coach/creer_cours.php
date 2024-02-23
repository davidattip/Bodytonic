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

// Traitement de la requête POST pour créer un cours
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titre = $_POST["titre"];
    $description = $_POST["description"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];

    // Insertion du cours dans la base de données
    $sql = "INSERT INTO cours (titre, description, date, heure) VALUES ('$titre', '$description', '$date', '$heure')";

    if ($conn->query($sql) === TRUE) {
        echo "Le cours a été créé avec succès.";
    } else {
        echo "Erreur lors de la création du cours : " . $conn->error;
    }
}

?>
