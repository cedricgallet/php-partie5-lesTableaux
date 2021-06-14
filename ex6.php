<?php
$dept = array (
    02 =>'Aisne',
    59 =>'Nord',
    60 =>'oise',
    63 =>'Pas-de-Calais',
    80 => 'somme',
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 5 Ex6</title>
</head>
<body>
Exercice 6 Devoir <br>
Avec le tableau de l'exercice 5, afficher la valeur de l'index 59. <br>

<br><br><br>

<?=$dept[59];?>
<br><br><br>
<?php
print_r ($dept[59]);
?>

</body>
</html>