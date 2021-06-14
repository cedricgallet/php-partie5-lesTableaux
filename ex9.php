<?php
$dept = array (
    02 =>'Aisne',
    59 =>'Nord',
    60 =>'Oise',
    62 =>'Pas-de-Calais',
    80 => 'somme',
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 5 Ex9</title>
</head>
<body>
Exercice 9 Devoir <br>
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau. <br> <br>

<br><br><br>

<br><br>
<?php
var_dump ($dept);
?>
<br><br><br>
<?php
print_r ($dept);
?>
<br><br><br>

<ul>
<?php
foreach ($dept as $valeur) {
    echo "<li>$valeur</li>";
}
?>
</ul>

</body>
</html>