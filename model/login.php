<?php
require_once('model/conexion.php');
class Login extends Conexion{

   public function login($correo,$pass){
      try{
       $sql = "SELECT * FROM usuario WHERE correo = :correo AND pass = :pass";
       $request = Conexion::prepare($sql);
       $request->bindParam(':correo', $correo);
       $request->bindParam(':pass',$pass);
       $request->execute();
       $response = $request->fetch(PDO::FETCH_ASSOC);
       return $response;
      }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
      }
   }

}