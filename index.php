<?php
 session_start();
require_once('config/config.php');
require_once('helpers/helpers.php');
if(isset($_GET['url'])){
    $url = $_GET['url'];
}else{
    $url = 'login';
}

getPermisos(1,1);  //admin,usuario

if(is_file('controller/'.$url.'.php')){
    require_once('controller/'.$url.'.php');
}else{
    require_once('view/error.php');
}

exit;
?>