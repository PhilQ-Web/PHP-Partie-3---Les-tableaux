<?php 
        // déclaration de la variable département et initialisation de ses valeurs
        // les nombres sont des chaines de caractères pour pouvoir afficher 02
        $départements = ['02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-Calais', '80' => 'Somme'];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 5</title>
</head>
<body>
<?php 
       foreach($départements as $clef => $valeur){ ?>
         <p><?php  echo $valeur;?></p><?php }?>
         
</body>
</html>