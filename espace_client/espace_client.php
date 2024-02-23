<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pa', 'root', '');

    // Récupérer les cours passés
    $coursPasses = [];
    $sql = "SELECT date, coach, titre FROM cours WHERE date < CURDATE()";
    $stmt = $bdd->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $coursPasses[] = $row;
    }

    // Récupérer les cours actuels
    $coursActuels = [];
    $sql = "SELECT date, coach, titre FROM cours WHERE date = CURDATE()";
    $stmt = $bdd->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $coursActuels[] = $row;
    }

    // Récupérer les cours à venir
    $coursAVenir = [];
    $sql = "SELECT date, coach, titre FROM cours WHERE date > CURDATE()";
    $stmt = $bdd->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $coursAVenir[] = $row;
    }

    // Afficher la liste des cours passés
    echo "<h2>Liste des cours passés</h2>";
    echo "<ul>";
    foreach ($coursPasses as $cours) {
        echo "<li>Date: " . $cours['date'] . " | Coach: " . $cours['coach'] . " | Titre: " . $cours['titre'] . "</li>";
    }
    echo "</ul>";

    // Afficher la liste des cours actuels
    echo "<h2>Liste des cours actuels</h2>";
    echo "<ul>";
    foreach ($coursActuels as $cours) {
        echo "<li>Date: " . $cours['date'] . " | Coach: " . $cours['coach'] . " | Titre: " . $cours['titre'] . "</li>";
    }
    echo "</ul>";

    // Afficher la liste des cours à venir
    echo "<h2>Liste des cours à venir</h2>";
    echo "<ul>";
    foreach ($coursAVenir as $cours) {
        echo "<li>Date: " . $cours['date'] . " | Coach: " . $cours['coach'] . " | Titre: " . $cours['titre'] . "</li>";
    }
    echo "</ul>";

    // Fermer la connexion à la base de données
    $bdd = null;
} catch (PDOException $e) {
    die('Erreur: ' . $e->getMessage());
}
?>
