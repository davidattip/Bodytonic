<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=pa;','root','tuto');

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
     
     <?php
       $recupArcticles = $bdd->query('SELECT * FROM articles');
       while($article = $recupArcticles->fetch()){
        ?>
        <div class="article" style="border: 1px solid black;">
                <h1><?= $article['titre']; ?></h1>
                <p><?= $article['contenu']; ?></p>
                <a href="supprimer-article.php ?id=<?= $article['id'];?>">
                <button style="color:white; background-color: red; padding-bottom: 10px;">Supprimer l'article</button>
                </a>
                <a href="modifier-article.php ?id=<?= $article['id'];?>">
                <button style="color:black; background-color: yellow; padding-bottom: 10px;">Modifier l'article</button>
                </a>
                
        </div>
        <div>
        <a href="publier_article.php">
                <button style="color:black; background-color: yellow; padding-bottom: 10px;">Publier un article</button>
                </a>
        </div>
        <?php
       }
     ?>
    </body>
</html>
