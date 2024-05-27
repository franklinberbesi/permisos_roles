<?php
if(isset($_SESSION)){
    if(empty($_SESSION['login'])){
       header('Location: ?url=login');
       exit;
    }
}

getPermisos($_SESSION['id_rol'],MODULOS['USUARIOS']);

$acciones = 'Acciones: ';

//verificamos si tiene permiso al modulo de usuarios
if(empty($_SESSION['permisos'][MODULOS['USUARIOS']])){
    header('Location: ?url=login');
    exit;
}

if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['VER']] == 0){
    header('Location: ?url=login');
    exit;
}else{
    $acciones .= 'Ver | '; 
}


//registrar
if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['REGISTRAR']] == 1){
    $acciones .=' Registrar | ';
}

//modificar
if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['MODIFICAR']] == 1){
    $acciones .=' Modificar | ';
}

//eliminar 
if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['ELIMINAR']] == 1){
    $acciones .=' Eliminar | ';
}

//generar reporte
if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['GENERAR REPORTE']] == 1){
    $acciones .=' Generar Reporte | ';
}

//enviar email
if($_SESSION['permisos'][MODULOS['USUARIOS']][ACCIONES['ENVIAR EMAIL']] == 1){
    $acciones .=' Enviar Email';
}

require_once('view/usuarios.php');
?>