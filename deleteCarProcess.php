<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }
    
include_once($_SERVER['DOCUMENT_ROOT'] . "/LOGIN_EXO_WITHDB/DAO/voiture.php");

$voitureDAO = new Voiture;

$carID = $_GET['cars'];
$voitureDAO->deleteCar($carID);

header('Location: voiturePage.php');