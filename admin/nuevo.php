<?php session_start();
require 'config.php';
require '../functions.php';

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();

// Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si los datos han sido enviados
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$Nombre = limpiarDatos($_POST['Nombre']);
	$Marca = limpiarDatos($_POST['Marca']);
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	$Unidades = $_POST['Unidades'];
	$Codigo_barras = $_POST['Codigo_barras'];
	$Precio_Compra = $_POST['Precio_Compra'];
	$Precio_Venta = $_POST['Precio_Venta'];
	$thumb = $_FILES['thumb']['tmp_name'];

	// Direccion final del archivo incluyendo el nombre
	# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
	# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
	$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

	// Subimos el archivo
	move_uploaded_file($thumb, $archivo_subido);

	$statement = $conexion->prepare(
		'INSERT INTO productos (id, Nombre, Marca, Unidades, Codigo_barras, Precio_Venta, Precio_Compra, Foto) 
		VALUES (null, :nombre, :marca, :unidades, :codigo_barras, :precio_compra, :precio_venta, :thumb)'
	);

	$statement->execute(array(
		':nombre' => $Nombre,
		':marca' => $Marca,
		':unidades' => $Unidades,
		':codigo_barras' => $Codigo_barras,
		':precio_compra' => $Precio_Compra,
		':precio_venta' => $Precio_Venta,
		':thumb' => $_FILES['thumb']['name']
	));

	header('Location: ' . RUTA . '/admin');
}


require '../views/nuevo.view.php';

?>