document.addEventListener('DOMContentLoaded', function() {
  // Soumission du formulaire de création de cours
  document.getElementById('createCourseForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page
    
    // Récupération des valeurs du formulaire
    var titre = document.getElementById('titre').value;
    var description = document.getElementById('description').value;
    var date = document.getElementById('date').value;
    var heure = document.getElementById('heure').value;

    // Création d'une requête HTTP
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'creer_cours.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    // Envoi des données au script PHP de création de cours
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        alert(xhr.responseText); // Affiche la réponse du serveur (message de succès ou d'erreur)
        document.getElementById('titre').value = ''; // Réinitialise les champs du formulaire
        document.getElementById('description').value = '';
        document.getElementById('date').value = '';
        document.getElementById('heure').value = '';
        loadCourseList(); // Recharge la liste des cours
      }
    };

    // Construction des données à envoyer
    var data = 'titre=' + encodeURIComponent(titre) +
               '&description=' + encodeURIComponent(description) +
               '&date=' + encodeURIComponent(date) +
               '&heure=' + encodeURIComponent(heure);

    // Envoi de la requête HTTP
    xhr.send(data);
  });

  // Chargement initial de la liste des cours
  loadCourseList();

  // Fonction pour charger la liste des cours depuis la base de données
  function loadCourseList() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'liste_cours.php', true);

    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4 && xhr.status === 200) {
        document.getElementById('courseList').innerHTML = xhr.responseText; // Insère la liste des cours dans la page
      }
    };

    xhr.send();
  }

  // Suppression d'un cours
  document.getElementById('courseList').addEventListener('click', function(event) {
    if (event.target.classList.contains('deleteButton')) {
      var courseID = event.target.dataset.courseId;

      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'supprimer_cours.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
          alert(xhr.responseText);
          loadCourseList();
        }
      };

      var data = 'courseID=' + encodeURIComponent(courseID);
      xhr.send(data);
    }
  });
});
