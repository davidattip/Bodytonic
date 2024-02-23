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
        $prenoms= array('Pierre','paul','Jacques');
        echo $prenoms[2];
        $age = array(
        'Pierre' => 24,
        'paul'   => 18,
        'jacques'=> 63,
        'david'  => 22,
        );
        $taille = array(
            'pierre' => 190,
            'david'  => 180,
        );
        echo 'pierre a '. $age['Pierre'].' et '.$taille['pierre'].' en taille</br>';
        echo $prenoms[2];
        foreach($age as $items){
            echo $items.'</br>';
        }
        foreach($age as $clef => $items){
            echo'L\'age de '.$clef.' est égale à '.$items.'</br>';
            
        }
        $membres=array(
            array('fille', 'male','chien'),
            array('fiile1','male1','chien1'),
            array('fille2','male2','chien2'),
        );
        foreach($membres as $items){
            
        }
        echo $membres[0][1].'</br>';
        ?>
    </body>
</html>