<?php
 include_once __DIR__ . "/connectaBD.php";
 $connexio = connectaBD();
 try{
 $consulta_mencions = $connexio->prepare("SELECT id,nom FROM mencions WHERE
grau=" . $_GET['grau']);
 $consulta_mencions->execute();
 $resultat_mencions = $consulta_mencions->fetchAll(PDO::FETCH_ASSOC);
 foreach($resultat_mencions as $fila){
 echo "<option value='" . $fila['id'] . "'>" . $fila['name'] .
"</option>\n";
 }
 }catch(PDOException $e){
 echo "<option> no disponibles </option>\n";
 }
 $connexio = null;
?>
