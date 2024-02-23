<?php 
if (isset($_POST['Valider'])){
    if(!empty($_POST['email']) AND !empty($_POST['mdp'])){
        $email_par_defaut = "admin@gmail.com";
        $mdp_par_defaut = "admin1234";
        $email_saisi = htmlspecialchars($_POST['email']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($email_saisi == $email_par_defaut AND $mdp_saisi == $mdp_par_defaut){

        }else{
            echo " votre mot de passe ou email est incorrect";
        }
    }else{
        echo"Veuillez compléter tous les champs....";
    }
}
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h1>Connexion</h1>

        <div>
            <form action="" method="POST">
                <input type="email" name="email" placeholder="Adresse mail">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <input type="submit" name="valider">
            </form>
        </div>
        
        
    </body>
</html>