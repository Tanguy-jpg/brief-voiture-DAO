<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }


include_once($_SERVER['DOCUMENT_ROOT'] . "/LOGIN_EXO_WITHDB/DAO/voiture.php");

$voitureDAO = new Voiture;
$voitures =$voitureDAO->findAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voitures</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/voiture.css">
</head>
<body>
    <form action="add-car_process.php" method="post" id="AddCarForm">
        <div>
            <input type="text" name="immat" required="required" placeholder="Immatriculation" autocomplete="off" >
            <input type="text" name="couleur" required="required" placeholder="Couleur(s)" autocomplete="off" >
        </div>
        <div>
            <input type="text" name="marque" required="required" placeholder="Marque" autocomplete="off" >
            <input type="text" name="model" required="required" placeholder="Model" autocomplete="off" >
        </div>
        <input type="submit" value="Ajouter">
    </form>
    <table>
        <thead>
            <tr>
                <th colspan="2">Voiture(s)</th>
            </tr>
        </thead>
        <tbody >
            <tr id="row_one">
                <td>Immatriculation</td>
                <td>Couleur</td>
                <td>Marque</td>
                <td>Modèle</td>
            </tr>
            <?php
                require_once('DAO/affichage.php');
            ?>
          </tbody>
    </table>
</body>

</html>