<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visite</title>
</head>
<body>
    <h1>Bienvenue, vous faites maintenant partie des statistiques du site ! :D</h1>
<?php
    // 1 : On ouvre le fichier
    $monfichier = fopen('compteur.txt', 'r+');
    
    // 2 : On lit la première ligne du fichier
    $pages_vues = fgets($monfichier);

    // 3 : On augmente de 1 ce nombre de pages vues
    $pages_vues += 1;

    // 4 : On remet le curseur au début du fichier
    fseek($monfichier, 0);

    // 5 : On écrit le nouveau nombre de pages vues
    fputs($monfichier, $pages_vues);

    // 6 : Quand on a fini de l'utiliser, on ferme le fichier
    fclose($monfichier);
?>

    <p>Cette page a été vue <strong><?= $pages_vues; ?></strong> fois !</p>
</body>
</html>