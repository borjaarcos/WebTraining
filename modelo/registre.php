<?php

function register(): bool{
    extract($_POST);
    $correctData=true;
    $conn = \connectaDb::conn();
    //Comprovación para filtrar datos
    if (!filter_var($_POST['correu'], FILTER_VALIDATE_EMAIL)) {
        $correctData=false;
    }
    elseif (empty($_POST['adresa']) || empty($_POST['nom']) || empty($_POST['correu']) || empty($_POST['codiPostal']))
    {
        $correctData=false;
    }
    else{
        //Preparo la sentencia para insertar el usuario
        $sql="INSERT INTO usuario (nom, correu, adresa,poblacio, codiPostal, contrasenya)
     VALUES (:nom,:correu,:adresa,:poblacio,:codiPostal,:contrasenya)";
        $insertUser = $conn->prepare($sql);
        //Sustitución de caracteres especiales y hashing de la contrasenya
        $_POST['contrasenya']=password_hash(htmlspecialchars($_POST['contrasenya']),PASSWORD_DEFAULT );
        print_r($_POST);
        $_POST['adresa']=htmlspecialchars($_POST['adresa']);
        $_POST['nom']=htmlspecialchars($_POST['nom']);
        $_POST['poblacio']=htmlspecialchars($_POST['poblacio']);
        $_POST['codiPostal']=htmlspecialchars($_POST['codiPostal']);
        $insertUser->execute([
            'adresa'=>$_POST['adresa'],
            'nom'=>$_POST['nom'],
            'poblacio'=>$_POST['poblacio'],
            'codiPostal'=>$_POST['codiPostal'],
            'contrasenya'=>$_POST['contrasenya'],
            'correu'=>$_POST['correu']
        ]);
    }
    return $correctData;
}
?>

