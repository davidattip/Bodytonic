<?php

if (!isset($_POST["email"]) || empty($_POST["email"]) || !isset($_POST["mdp"]) || empty($_POST["mdp"]) ) {
	header('location: connexion.php?message=Veuillez remplir les champs indiqués');
	exit;
}
include ('includes/db.php');

$q = 'SELECT * FROM coach WHERE email = :email';

$req = $bdd -> prepare($q);

$req->execute([
	'email' => $_POST['email']
]);

$coach = $req->fetchAll(PDO::FETCH_ASSOC);

if($coach[0]['password'] !=  hash('sha256',$_POST['mdp'])){
	header('location:connexion.php?message=Identifiants incorrects');
	exit;
}

session_start();

$_SESSION['id']=$users[0]['id'];

header('location:index.php');

?>
