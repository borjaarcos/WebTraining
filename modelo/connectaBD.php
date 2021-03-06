<?php
 require_once __DIR__.'/../config.php';
 /**
  * Class Db
  */
 class connectaDb{
     private static $instance;
     private $conn;
     
     private function __construct(){
         try{
             $this->conn = new \PDO(
                sprintf('mysql:dbname=%s;host=%s;charset=UTF8', DATABASE_NAME,
                DATABASE_HOST),
                DATABASE_USER,
                DATABASE_PASSWORD
             );
         } catch(\PDOException $e){
             echo sprintf('Connection failed: %s', $e->getMessage());
             die;
         }
     }
     public static function getInstance():self{
         if(self::$instance === null){
             self::$instance = new self();
         }
         return self::$instance;
     }
     public static function conn(){
         return self::getInstance()->conn;
     }
 }

 
?>
