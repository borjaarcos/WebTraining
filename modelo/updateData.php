<?php

function updateData(): bool{
    extract($_POST);
    $correctData=true;
    $conn = \connectaDb::conn();
    //Comprovación para filtrar datos
    if (!filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL)) {
        $correctData=false;
    }
    else{
        //Preparo la sentencia para insertar el usuario
        if(empty($_POST['contrasenya'])) {
            $sql = "UPDATE usuario SET nom=:nom, correu=:correu, adresa=:adresa,poblacio=:poblacio, codiPostal=:codiPostal
         WHERE correu=:correu";
            $insertUser = $conn->prepare($sql);
            /*
            $insertUser->bindParam(':correuActual', $_SESSION['correu_usuari']);
            $insertUser->bindParam(':correu', $_POST['correu']);
            $insertUser->bindParam(':nom', $_POST['nom']);
            $insertUser->bindParam(':adresa', $_POST['adresa']);
            $insertUser->bindParam(':poblacio', $_POST['poblacio']);
            $insertUser->bindParam(':codiPostal', $_POST['codiPostal']);*/

            //Sustitución de caracteres especiales y hashing de la contrasenya
            $_POST['adresa'] = htmlspecialchars($_POST['adresa']);
            $_POST['nom'] = htmlspecialchars($_POST['nom']);
            $_POST['poblacio'] = htmlspecialchars($_POST['poblacio']);
            $_POST['codiPostal'] = htmlspecialchars($_POST['codiPostal']);
            $insertUser->execute([
                'nom' => $_POST['nom'],
                'correu' => $_POST['correu'],
                'adresa' => $_POST['adresa'],
                'poblacio'=> $_POST['poblacio'],
                'codiPostal' => $_POST['codiPostal']

            ]);
        }else{
            $sql = "UPDATE usuario SET nom=:nom, correu=:correu, adresa=:adresa,poblacio=:poblacio, codiPostal=:codiPostal, contrasenya=:contrasenya
            WHERE correu=:correu";
            $insertUser = $conn->prepare($sql);
            /*
            $insertUser->bindParam(':correuActual', $_SESSION['correu_usuari']);
            $insertUser->bindParam(':correu', $_POST['correu']);
            $insertUser->bindParam(':nom', $_POST['nom']);
            $insertUser->bindParam(':adresa', $_POST['adresa']);
            $insertUser->bindParam(':poblacio', $_POST['poblacio']);
            $insertUser->bindParam(':codiPostal', $_POST['codiPostal']);*/

            //Sustitución de caracteres especiales y hashing de la contrasenya
            $_POST['adresa'] = htmlspecialchars($_POST['adresa']);
            $_POST['nom'] = htmlspecialchars($_POST['nom']);
            $_POST['poblacio'] = htmlspecialchars($_POST['poblacio']);
            $_POST['codiPostal'] = htmlspecialchars($_POST['codiPostal']);
            $_POST['contrasenya']=password_hash(htmlspecialchars($_POST['contrasenya']),PASSWORD_DEFAULT );
            $insertUser->execute([
                'nom' => $_POST['nom'],
                'correu' => $_POST['correu'],
                'adresa' => $_POST['adresa'],
                'poblacio'=> $_POST['poblacio'],
                'codiPostal' => $_POST['codiPostal'],
                'contrasenya'=>$_POST['contrasenya']

            ]);
        }
        $_SESSION['nom_usuari'] = $_POST['nom'];
        $_SESSION['adresa_usuari'] = $_POST['adresa'];
        $_SESSION['poblacio_usuari'] = $_POST['poblacio'];
        $_SESSION['codiPostal_usuari'] = $_POST['codiPostal'];
    }

    return $correctData;
}
?>

