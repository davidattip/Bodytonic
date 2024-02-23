<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=pa', 'root', 'tuto');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupUser = $bdd->prepare('SELECT * FROM users WHERE id = ?');
    $recupUser->execute(array($getid));
    if($recupUser->rowCount() > 0){
        $bannirUser = $bdd->prepare('DELETE FROM users WHERE id = ?');
        $bannirUser->execute(array($getid));
        header('Location: utilisateurs.php?message=l\'utilisateur a été banni');
	exit;
    }else{
        
        header('Location: utilisateurs.php?message=Aucun membre n\'a été trouvé');
	exit;
    }
}else{
    
    header('Location: utilisateurs.php?message=L\'identifiant n\'a pas été récupéré');
	exit;
}

?>