<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=pa', 'root', '');
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}
?>