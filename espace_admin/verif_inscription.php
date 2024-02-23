<?php
var_dump($_POST);

	if (!isset($_POST['nom']) || empty($_POST['nom']) || !isset($_POST['prenom']) || empty($_POST['prenom']) || !isset($_POST['email']) || empty($_POST['email']) || !isset($_POST['mdp']) || empty($_POST['mdp'])  ) {
		header('location:inscription.php?message=Veuillez remplir les champs indiqués.');
	}

	if(strlen($_POST['mdp']) < 8 ){
		header('location:inscription.php?message=Le mot de passe doit faire au minimum 8 caractères.'); 
        exit;
    }

    if(!preg_match('/[A-Z]/', $_POST['mdp']) ){
		header('location:inscription.php?message=Le mot de passe doit contenir une majuscule.');
        exit;
	}

	if(!preg_match('/[a-z]/', $_POST['mdp']) ){
		header('location:inscription.php?message=Le mot de passe doit contenir une minuscule.');
        exit;
    }

    if(!preg_match('/[0-9]/', $_POST['mdp']) ){
		header('location:inscription.php?message=Le mot de passe doit contenir un chiffre.');
        exit;
    }

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        header('location:inscription.php?message= Email invalide. ');
        exit;
	}

include('includes/db.php');

	$q = 'SELECT id FROM coach WHERE email = :email';

    $req = $bdd ->prepare($q);

    $req->execute([
    				'email' => $_POST['email']
	]);

	if($req->rowcount() > 0){
            header('location:inscription.php?message=L\'email est deja utilisé.');
            exit;
	}

    $q="INSERT INTO coach (nom, prenom, email, password) VALUES (:nom, :prenom, :email, :mdp)";

    $req = $bdd-> prepare($q);

    $result = $req ->execute ([
    						'nom' =>($_POST['nom']),
                            'prenom' =>($_POST['prenom']),
                            'email' =>($_POST['email']),
                            'mdp' =>  hash('sha256',$_POST['mdp']),
                            ]);
                           
    if(!$result){
        header('location: inscription.php?message=Echec lors de l\'inscription');
        exit;
    }
    
	header('location: index.php');
	exit;

  ?>




