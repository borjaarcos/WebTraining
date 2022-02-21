<?php

/**
 * @return array
 */

function getProducteById(int $Id): array{
     $conn = \connectaDb::conn();
     
     $sql= 'SELECT id, nom, descripcio,preu, img
            FROM producto
            WHERE id = :id';
     $stmt=$conn->prepare($sql);
     $stmt->execute(
        [
            'id'=>$Id
        ]
     );
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }