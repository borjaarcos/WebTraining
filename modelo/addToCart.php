<?php
function afegiralCarret($id){
    $conn= \connectaDb::conn();
    if (isset($_SESSION['carret'])) {
        $productes=$_SESSION['carret'];
        array_push($productes, $id);
    }else{
        $productes=[$id];
    }
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
    $_SESSION['preuCarret_usuari'] = $result['preu']+$_SESSION['preuCarret_usuari'];
    $_SESSION['qtyCarret_usuari'] = $_SESSION['qtyCarret_usuari']+1;
    $_SESSION['carret']=$productes;
}
