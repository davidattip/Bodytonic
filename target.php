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
     <p>Bonjour</p>
     <?php
      echo strip_tags($_POST['prenom']);
      include"fonction.php";
     ?>
    </body>
</html>