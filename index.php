<?php
/*Sistema de Estandares */

require_once('config/global.php');
require_once('core/ControladorBase.php');
require_once('core/ControladorFrontal.func.php');

//CONTROLADOR PRINCIPAL DE ESTANDARES
if(isset($_GET['controller']) && $_GET['controller']){
	$controllerObj = cargarControlador($_GET['controller']);
}else{
	$controllerObj = cargarControlador(CONTROLADOR_DEFECTO);
}
lanzarAccion($controllerObj);
?>