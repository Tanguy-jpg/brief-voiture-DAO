<?php
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=exercice_login;charset=UTF8','root', '');
    }catch(Exception $e){
        die('Erreur'.$e->getMessage());
    }