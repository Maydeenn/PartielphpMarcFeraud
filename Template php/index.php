<?php
include 'connexion.php';

$nom= mysqli_query($conn, "SELECT nom FROM partielmferaud");
$affichernom = mysqli_fetch_row($nom);

$prenom= mysqli_query($conn, "SELECT prenom FROM partielmferaud");
$afficherprenom = mysqli_fetch_row($prenom);

$age= mysqli_query($conn, "SELECT age FROM partielmferaud");
$afficherage = mysqli_fetch_row($age);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>
        <table>

        <table>
            <tr id="items">
                <th>Nom : <?php echo $affichernom[0]; ?> </th>
                <th>Prénom : <?php echo $afficherprenom[0]; ?></th>
                <th>Age : <?php echo $afficherage[0]; ?></th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>

    </div>
</body>

</html>