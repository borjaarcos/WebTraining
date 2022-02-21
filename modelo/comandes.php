<?php
function getComandaByUserId(): array{
    $conn = \connectaDb::conn();
    $user=$_SESSION['id_usuari'];
    $id_comanda_sql = "SELECT id, preu_total, data FROM comanda WHERE  user_id='$user'";
    $consultaId = $conn->prepare($id_comanda_sql);
    $consultaId->execute();
    $comandes = $consultaId->fetchAll(PDO::FETCH_ASSOC);
    $cont=0;
    foreach ($comandes as $comanda):
        $sql= 'SELECT producte_id
                FROM detall_comanda
                WHERE comanda_id = :id';
        $stmt=$conn->prepare($sql);
        $stmt->execute(
            [
                'id'=>$comanda['id']
            ]
        );
        $productsFetch=$stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($productsFetch as $product):
            $sql_detall_producte= 'SELECT nom, preu, descripcio, img
                FROM producto
                WHERE id = :id';
            $stmt=$conn->prepare($sql_detall_producte);
            $stmt->execute(
                [
                    'id'=>$product['producte_id']
                ]
            );
            $detailProductsFetch=$stmt->fetchAll(PDO::FETCH_ASSOC);
            $comanda= array_merge($comanda,$detailProductsFetch);
        endforeach;
        $comandes[$cont]=$comanda;
        $cont= $cont+1;
    endforeach;
    return $comandes;
}