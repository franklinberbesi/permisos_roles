<?php
require_once('model/permisos_roles.php');
$obj = new Permisos_roles();
//selecciona todos los modulos.
$arrModulos = $obj->get_modulos();
//selecciona todos los permisos según el id_rol y el id_modulo (rol,módulo).
$arrPermisosMoldel = $obj->get_permisos_model(1);
// dep($arrModulos);
dep($arrPermisosMoldel);exit;