<!DOCTYPE html>
<html>
<head>
  <title>Gestion des cours</title>
  <link rel="stylesheet" type="text/css" href="espace_coach_style.css">
</head>
<body>
  <h1>Gestion des cours</h1>

  <!-- Formulaire pour créer un cours -->
  <h2>Créer un cours</h2>
  <form id="createCourseForm" method="POST" action="creer_cours.php">
    <label for="titre">Titre :</label>
    <input type="text" id="titre" name="titre" required><br>
    
    <label for="description">Description :</label>
    <textarea id="description" name="description" required></textarea><br>
    
    <label for="date">Date :</label>
    <input type="date" id="date" name="date" required><br>
    
    <label for="heure">Heure :</label>
    <input type="time" id="heure" name="heure" required><br>
    
    <input type="submit" value="Créer">
  </form>

  <!-- Liste des cours existants -->
  <h2>Liste des cours</h2>
  
  <ul id="courseList">
    <!-- Les cours seront ajoutés dynamiquement ici -->
  </ul>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="espace_coach_script.js"></script>
</body>
</html>
