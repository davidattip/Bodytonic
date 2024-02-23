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

// Récupération des cours depuis la base de données
$sql = "SELECT * FROM cours";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Affichage des cours dans la liste
    while ($row = $result->fetch_assoc()) {
        $courseID = $row['id'];
        $titre = $row['titre'];
        $description = $row['description'];
        $date = $row['date'];
        $heure = $row['heure'];

        echo '<li>' . $titre . ' - ' . $date . ' ' . $heure . '<button class="deleteButton" data-course-id="' . $courseID . '">Supprimer</button></li>';
    }
} else {
    echo '<li>Aucun cours trouvé.</li>';
}

// Fermeture de la connexion à la base de données
$conn->close();
?>
