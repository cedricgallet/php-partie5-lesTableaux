<?php
$dept = array (
    '02' =>'Aisne',
    59 =>'Nord',
    60 =>'Oise',
    63 =>'Pas-de-Calais',
    80 => 'Somme',
);

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 5 </title>
</head>
<body>
Exercice 10 Devoir <br>
Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés. <br>
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département <br>
<br><br><br>

<?php
var_dump ($dept);
?>
<br><br><br>
<?php
print_r ($dept);
?>
<br><br><br><br>

<?php
foreach ($dept as $cle => $valeur) {
    echo $cle.' - '.$valeur.'<br />'."\n";
}
?>

</body>
</html>