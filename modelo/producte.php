<?php

/**
 * @return array
 */
 function getProductes(): array{
     $conn= \connectaDb::conn();
     
     $sql= 'SELECT id, nom
            FROM producto';
     
     $stmt = $conn->query($sql, \PDO::FETCH_ASSOC);
     
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
 }

 function getProducteByCategoryId(int $categoryId): array{
     $conn = \connectaDb::conn();
     
     $sql= 'SELECT id, nom
            FROM producto
            WHERE categoria = :category_id';
     $stmt=$conn->prepare($sql);
     $stmt->execute(
        [
            'category_id'=>$categoryId
        ]
     );
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
 }

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