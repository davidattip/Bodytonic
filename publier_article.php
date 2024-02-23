<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=pa;','root','');
if(!$_SESSION['mdp']){
    header('Location:connexion.php');
}
if(isset($_POST['envoi'])){
    if(!empty($_POST['titre']) AND !empty ($_POST['contenu'])){
        $_titre = htmlspecialchars($_POST['titre']);
        $contenu = nl2br(htmlspecialchars($_POST['contenu']));

        $insertArcticle = $bdd->prepare('INSERT INTO articles(titre, contenu)VALUES(?, ?)');
        $insertArcticle->execute(array($titre, $contenu));
        echo "l'article a bien été envoyé";
    }else{
        echo "veuillez complétez tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     <<form method="POST" action="">

        <input type="text" name ="titre" >
        <br>
        <textarea  name ="contenu"></textarea>
        <br>
        <input type="submit" value="Envoi"/>
    
    </form>
    </body>
</html>

