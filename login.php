<?php session_start();
require 'admin/config.php';
require 'functions.php';
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$usuario = limpiarDatos($_POST['usuario']);
	$password = limpiarDatos($_POST['password']);
	$resultado = $conexion->query("SELECT * FROM usuarios WHERE Nombre = '$usuario'");
	$mostrar	 = $resultado->fetch();
	

	if ($usuario == $mostrar['Nombre'] && $password == $mostrar['Password'] && $mostrar['Rol']== 1) {
		$_SESSION['admin'] = $mostrar['Nombre'];
		echo'<script type="text/javascript"> alert("bienvenido");</script>';
		header('Location: '. RUTA . '/admin');
	}else{
		$_SESSION['usuario'] = $mostrar['Nombre'];
		header('Location: ' . RUTA);
	}
}

require 'views/login.view.php';


?>


