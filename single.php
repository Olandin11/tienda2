<?php 

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
// $id_articulo = (int)limpiarDatos($_GET['id']);
$id_producto = id_producto($_GET['id']);

if (!$conexion) {
    echo "no conexion";
    //header('Location: error.php');
}

if (empty($id_producto)) {
    header('Location: index.php');
}

$producto = obtener_producto_por_id($conexion, $id_producto);

if (!$producto) {
    // Redirigimos al index si no hay post
    header('Location: index.php');
}

$producto = $producto[0];


require 'views/single.view.php';

?>