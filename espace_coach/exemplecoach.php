$(document).ready(function() {
    // Soumission du formulaire de création de cours
    $('#createCourseForm').submit(function(event) {
      event.preventDefault(); // Empêche le rechargement de la page
      
      // Récupération des valeurs du formulaire
      var titre = $('#titre').val();
      var description = $('#description').val();
      var date = $('#date').val();
      var heure = $('#heure').val();
  
      // Envoi des données au script PHP de création de cours
      $.ajax({
        type: 'POST',
        url: 'creer_cours.php',
        data: {
          titre: titre,
          description: description,
          date: date,
          heure: heure
        },
        success: function(response) {
          alert(response); // Affiche la réponse du serveur (message de succès ou d'erreur)
          $('#titre').val(''); // Réinitialise les champs du formulaire
          $('#description').val('');
          $('#date').val('');
          $('#heure').val('');
          loadCourseList(); // Recharge la liste des cours
        }
      });
    });
  
    // Chargement initial de la liste des cours
    loadCourseList();
  
    // Fonction pour charger la liste des cours depuis la base de données
    function loadCourseList() {
      $.ajax({
        type: 'GET',
        url: 'liste_cours.php',
        success: function(response) {
          $('#courseList').html(response); // Insère la liste des cours dans la page
        }
      });
    }
  
    // Suppression d'un cours
    $('#courseList').on('click', '.deleteButton', function() {
        var courseID = $(this).data('course-id');
      
        $.ajax({
          type: 'POST',
          url: 'supprimer_cours.php',
          data: {
            courseID: courseID
          },
          success: function(response) {
            alert(response);
            loadCourseList();
          }
        });
      });
      
  });
  