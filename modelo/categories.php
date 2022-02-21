<?php

/**
 * @return array
 */
 function getCategories(): array{
     $conn= \connectaDb::conn();
     
     $sql= 'SELECT id, nom
            FROM categoria';
     
     $stmt = $conn->query($sql, \PDO::FETCH_ASSOC);
     
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
 }

 function getCategoryById(int $categoryId): array{
     $conn = \connectaDb::conn();
     
     $sql= 'SELECT id, name
            FROM category
            WHERE id = :category_id';
     $stmt=$conn->prepare($sql);
     $stmt->execute(
        [
            'category_id'=>$categoryId
        ]
     );
     return $stmt->fetch(PDO::FETCH_ASSOC);
 }