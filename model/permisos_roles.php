<?php
require_once('model/conexion.php');
class Permisos_roles extends Conexion{

   public function get_modulos(){
      try{
       $sql = "SELECT * FROM modulo";
       $request = Conexion::query($sql);
       $response = $request->fetchall(PDO::FETCH_ASSOC);
       return $response;
      }catch(PDOException $e){
        echo 'Error: '.$e->getMessage();
      }
   }

   public function get_permisos_model($id_rol, $modulo = NULL){
    try{
        $where = '';
    if(is_null($modulo)){
        $where = 'WHERE rol_operacion.fk_id_rol = ?';
        $arrData = array($id_rol);
    }else{
        $where = 'WHERE rol_operacion.fk_id_rol = ? AND o.fk_id_modulo = ?';
        $arrData = array($id_rol,$modulo);
    }
     $sql = "SELECT o.fk_id_modulo as modulo, o.fk_tipo_accion as accion FROM `rol_operacion`
      INNER JOIN operaciones as o on o.id = rol_operacion.fk_id_operacion
      ".$where;
     $request = Conexion::prepare($sql);
     $request->execute($arrData);
     $response = $request->fetchall(PDO::FETCH_ASSOC);
     return $response;
    }catch(PDOException $e){
      echo 'Error: '.$e->getMessage();
    }
 }


}