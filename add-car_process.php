<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
    
include_once($_SERVER['DOCUMENT_ROOT'] . "/LOGIN_EXO_WITHDB/DAO/voiture.php");

$voitureDAO = new Voiture;

$immat = $_POST['immat'];
$color = $_POST['couleur'];
$marque = $_POST['marque'];
$model = $_POST['model'];

$voitureDAO->addCar($immat,$color,$marque,$model);
header('Location: voiturePage.php');

