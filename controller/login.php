<?php

require_once('model/login.php');

$objLogin = new Login();
if($_POST){
    $correo = isset($_POST['correo']) ? strtolower($_POST['correo']) : '';
    $pass = isset($_POST['pass']) ? strtolower($_POST['pass']) : '';
    if($correo == '' || $pass == ''){
        $message = 'Parametros incorrectos!';
        exit;
    }else{
        $res = $objLogin->login($correo,$pass);
            if(!empty($res)){
                $_SESSION['usuario'] = $res['nombre'];
                $_SESSION['id_rol'] = $res['fk_id_rol'];
                $_SESSION['login'] = true;
               
                header('Location:?url=usuarios');
                exit;
            }else{
                $message = 'Datos incorrectos!';
            }
    }

}

require_once('view/login.php');
exit;
?>