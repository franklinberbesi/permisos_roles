<?php
class Conexion extends PDO{
 private $conex;
 private $respconex;
 public function __construct(){
	 $conexstring = "mysql:host=".HOST.";dbname=".DB.";charset=utf8";
  
   try {
      $this->conex= parent::__construct($conexstring,USER,PASS);
      $this->respconex = "Conexion Exitosa..";
   }// fin del try
    catch (PDOException $e){
    	$this->conex = "Error de Conexion";
    	 $this->respconex=  "El Error es.. :".$e;
    }// fin del try-catch

  }// fin del constructor

public function getRespConex(){
            return  $this->respconex; 
        }

}//fin clase
?>