<?php

function dep($data){
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function getPermisos($id_rol,$modulo){
    require_once('model/permisos_roles.php');
    $objPermisos = new permisos_roles();
    $arrData = $objPermisos->get_permisos_model($id_rol,$modulo);

    if(!empty($arrData)){

    for($i=0;$i<count($arrData);$i++){
        $_SESSION['permisos'][$modulo][ACCIONES['VER']] = 0; 
        $_SESSION['permisos'][$modulo][ACCIONES['REGISTRAR']] = 0;
        $_SESSION['permisos'][$modulo][ACCIONES['MODIFICAR']] = 0;
        $_SESSION['permisos'][$modulo][ACCIONES['ELIMINAR']] = 0;
        $_SESSION['permisos'][$modulo][ACCIONES['GENERAR REPORTE']] = 0;
        $_SESSION['permisos'][$modulo][ACCIONES['ENVIAR EMAIL']] = 0;
    }

    for($i=0;$i<count($arrData);$i++){
        $modulo = $arrData[$i]['modulo'];
        $accion = $arrData[$i]['accion'];

    switch($accion){
        case ACCIONES['VER'] : $_SESSION['permisos'][$modulo][ACCIONES['VER']] = 1;
        break;
        case ACCIONES['REGISTRAR'] : $_SESSION['permisos'][$modulo][ACCIONES['REGISTRAR']] = 1;
        break;
        case ACCIONES['MODIFICAR'] : $_SESSION['permisos'][$modulo][ACCIONES['MODIFICAR']] = 1;
        break;
        case ACCIONES['ELIMINAR'] : $_SESSION['permisos'][$modulo][ACCIONES['ELIMINAR']] = 1;
        break;
        case ACCIONES['GENERAR REPORTE'] : $_SESSION['permisos'][$modulo][ACCIONES['GENERAR REPORTE']] = 1;
        break;
        case ACCIONES['ENVIAR EMAIL'] : $_SESSION['permisos'][$modulo][ACCIONES['ENVIAR EMAIL']] = 1;
        break;
    }

    }
    }else{
        header('Location:?url=login');
        exit;
    }
   return $_SESSION;
}