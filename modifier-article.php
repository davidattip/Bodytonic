<?php
$bdd = new PDO('mysql:host=localhost;dbname=pa;','root','');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupArticle = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $recupArticle->execute(array($getid));
    if($recupArticle->rowCount() > 0){
        $articleInfos = $recupArticle->fetch();
        $titre = $articleInfos['titre'];
        $contenu = str_replace('<br />', '', $articleInfos['contenu']);

        if(isset($_POST['valider'])){
            $titre_saisi = htmlspecialchars($_POST['titre']);
            $contenu_saisi = nl2br(htmlspecialchars($_POST['contenu']));
    
            $updateArticle = $bdd->prepare('UPDATE articles SET titre= ?, contenu = ? WHERE id = ?');
            $updateArticle->execute(array($titre_saisi, $contenu_saisi, $getid));
            header('Location: article.php');
        }
        
        
    }else{
        echo "Aucun article n'a été trouvé";
    }
}else{
    echo "L'identifiant n'a pas été récupéré";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Modifier l'article</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
     <<form method="POST" action="">

        <input type="text" name ="titre" value="<?= $titre; ?>">
        <br>
        <textarea  name ="contenu"><?= $contenu; ?></textarea>
        <br><br>
        <input type="submit" value="Valider"/>
    
    </form>
    </body>
</html>