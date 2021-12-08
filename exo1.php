<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">
<html>
    <head>
        <title>exo1</title>
        <link href="exo1.css" rel="stylesheet">
    </head>
    <body>
<title>Exo1</title>
<?php
    echo "coucou";
    $NombreAleatoire = rand ( 0 , 100 );
    if($NombreAleatoire%2 ==1){
        echo'<div class="Bleu">'.$NombreAleatoire."est impair</div>";
    }
    else{
        echo '<div class="rouge">'.$NombreAleatoire."est pair </div>";
    }
    highlight_file(__FILE__)
        ?>
</body>
</html>