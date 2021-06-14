<?php
$dept = array (
    'dept02' =>'Aisne',
    '59' =>'Nord',
    '60' =>'oise',
    '63' =>'Pas-de-Calais',
    '80' => 'somme',
);
$dept['51'] = 'Marne';
array_push($dept,'var'); //si pas besoin de cle bien precise
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 5 Ex7</title>
</head>
<body>
Exercice 7 Devoir <br>
Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims. <br>

<br><br><br>


<br><br><br>
<?php
print_r ($dept);
var_dump($dept['02']);
?>


</body>
</html>