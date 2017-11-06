<?php  
    require_once 'db/conexion.php';
    require_once 'controller/usuarios_controller.php';

    $controller = new usuarios_controller();
    if (!empty($_REQUEST['m'])) {
    $metodo = $_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller -> index();
        }
    }else{
        $controller -> index();
    }
?>