<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();


if (!$conexion) {
	header("Location: ../error.php");
}

$productos = obtener_producto($blog_config['producto_por_pagina'], $conexion);

require '../views/admin_index.view.php';
?>