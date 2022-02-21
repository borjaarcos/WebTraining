<?php


function insertComanda(){
    $conn = \connectaDb::conn();
    $Object = new DateTime();
    $Date = $Object->format("Y-m-d h:i:s a");
    $preu = $_SESSION['preuCarret_usuari'];
    $num_prods = $_SESSION['qtyCarret_usuari'];
    $user = $_SESSION['id_usuari'];
    $sql="INSERT INTO comanda (data, preu_total, num_prods, user_id)
     VALUES ('$Date',:preu_total,:num_prods,:user_id)";
    $insertComanda = $conn->prepare($sql);
    //Sustitución de caracteres especiales y hashing de la contrasenya
    $insertComanda->execute([
        'preu_total'=>$preu,
        'num_prods'=>$num_prods,
        'user_id'=>$user
    ]);
    $id_comanda_sql = "SELECT id FROM comanda WHERE data='$Date' and preu_total='$preu' and num_prods='$num_prods' and user_id='$user'";
    $consultaId = $conn->prepare($id_comanda_sql);
    $consultaId->execute();
    $id_comanda = $consultaId->fetchAll(PDO::FETCH_ASSOC);
    foreach ($_SESSION['carret'] as $id):
        $sql="INSERT INTO detall_comanda (cantidad, comanda_id, producte_id)
     VALUES (:quantity,:comanda_id,:product_id)";
        $insertComanda = $conn->prepare($sql);
        //Sustitución de caracteres especiales y hashing de la contrasenya
        $insertComanda->execute([
            'quantity'=>1,
            'comanda_id'=>$id_comanda[0]['id'],
            'product_id'=>$id
        ]);
    endforeach;

}