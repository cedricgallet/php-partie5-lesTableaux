<?php
$months = array ('janvier','février','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Partie 5 Ex8</title>
</head>
<body>
Exercice 8 Devoir <br>
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. <br>

    janvier <br>
    février <br>
    mars <br>
    avril <br>
    mai <br>
    juin <br>
    juillet <br>
    aout <br>
    septembre <br>
    octobre <br>
    novembre <br>
    décembre <br> <br> <br>

<?php
var_dump ($months);
?>
<br><br><br>
<?php
print_r ($months);
?>
<br><br><br>

    <ol>
        <?php
        foreach($months as $value) {
            echo "<li>$value</li>";
            
        }
        ?>
    </ol>
</body>
</html>