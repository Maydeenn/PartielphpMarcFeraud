<?php 
include 'connexion.php';

error_reporting(0);
session_start();
   
    if (isset($_POST["button"])) {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
       
        $sql = "INSERT INTO partielmferaud (nom, prenom, age) VALUES('$nom', '$prenom', '$age')";
                $result = mysqli_query($conn, $sql);
}     
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter un utilisateur</h2>
        <p class="erreur_message">
        </p>
        <form action="" method="POST">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Prenom</label>
            <input type="text" name="prenom">
            <label>age</label>
            <input type="number" name="age">
            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>