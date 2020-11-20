<?php 
        // déclaration de la variable months et initialisation de ses valeurs
        $months = ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre',];
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php 
        // Taille du tableau
       $taille = count($months); 
        // Affichage des valeurs
       for($i = 0; $i < $taille; $i++){
        echo $months[$i]. ' - ';
    }?>

    <!-- OU -->
<p>
    <?php 
       $counter=0; 
       while($counter <= 11)
        {echo $months[$counter]. '  ' ;
        $counter++;
    }?>
    </p>

    <!-- OU (plus propre) -->
<p>
    <?php 
       foreach($months as $element)
        {?><p><?php echo $element;?></p>
    <?php }?>
    </p>
</body>
</html>