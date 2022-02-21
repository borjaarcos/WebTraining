<?php

function login(): bool{
    session_start();
    extract($_POST);
    $correctData=false;
    $conn = \connectaDb::conn();
    $email = $_POST['email'];

    /*$cogerID = "SELECT id FROM users WHERE  email='$email' AND password='$pass'";
    $consultaID = $conn->prepare($cogerID);
    $consultaID->execute();
    $resultado5 = $consultaID->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION['id_usuario'] = $resultado5[0]['id'];*/

    $emailsql = "SELECT correu,contrasenya FROM usuario WHERE correu='$email'";

    $consultaEmail = $conn->prepare($emailsql);
    $consultaEmail->execute();
    $row1 = $consultaEmail->fetchAll(PDO::FETCH_ASSOC);

    if ($email == $row1[0]['correu'] && password_verify(htmlspecialchars($_POST['pass']), $row1[0]['contrasenya'])) {
        $cogerDatos = "SELECT id, nom, correu, adresa, poblacio, codiPostal  FROM usuario WHERE  correu='$email'";
        $consultaDatos = $conn->prepare($cogerDatos);
        $consultaDatos->execute();
        $resultado5 = $consultaDatos->fetchAll(PDO::FETCH_ASSOC);
        $_SESSION['id_usuari'] = $resultado5[0]['id'];
        $_SESSION['nom_usuari'] = $resultado5[0]['nom'];
        $_SESSION['correu_usuari'] = $resultado5[0]['correu'];
        $_SESSION['adresa_usuari'] = $resultado5[0]['adresa'];
        $_SESSION['poblacio_usuari'] = $resultado5[0]['poblacio'];
        $_SESSION['codiPostal_usuari'] = $resultado5[0]['codiPostal'];
        $_SESSION['preuCarret_usuari'] = 0;
        $_SESSION['qtyCarret_usuari'] = 0;
        $correctData =true;
    }
    print_r($row1);
    print_r($_SESSION);
    return $correctData;
}
?>


    
    