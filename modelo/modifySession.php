<?php
function deleteSessions(){
    unset($_SESSION['carret']);
    $_SESSION['preuCarret_usuari']=0;
    $_SESSION['qtyCarret_usuari']=0;
}

function deleteSession(){
    session_unset();
}

function deleteCartProduct($id){
    $conn = \connectaDb::conn();
    foreach (array_keys($_SESSION['carret'], $id) as $key):
        $sql= 'SELECT preu
            FROM producto
            WHERE id = :id';
        $stmt=$conn->prepare($sql);
        $stmt->execute(
            [
                'id'=>$id
            ]
        );
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['preuCarret_usuari'] = $_SESSION['preuCarret_usuari']-$result['preu'];
        unset($_SESSION['carret'][$key]);
        $_SESSION['qtyCarret_usuari']=$_SESSION['qtyCarret_usuari']-1;
    endforeach;

}