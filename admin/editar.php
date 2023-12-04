<?php session_start();
require 'config.php';
require '../functions.php';

// 1.- Conectamos a la base de datos
$conexion = conexion($bd_config);
if(!$conexion){
	header('Location: ../error.php');
}

// Comprobamos si la session esta iniciada, sino, redirigimos.
comprobarSession();

// Determinamos si se estan enviado datos por el metodo POST o GET
# Si se envian por POST significa que el usuario los ha enviado desde el formulario
# por lo que tomamos los datos y los cambiamos en la base de datos.

# De otra forma significa que hay datos enviados por el metodo GET
# es decir, el ID que pasamos por la URL, si es asi entonces traemos los 
# datos de la base de datos a pantalla para que el usuario los pueda modificar.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// Limpiamos los datos para evitar que el usuario inyecte codigo.
	$Nombre = limpiarDatos($_POST['Nombre']);
	$marca = limpiarDatos($_POST['Marca']);
	// Con la funcion nl2br podemos transformar los saltos de linea en etiquetas <br>
	// $texto = nl2br($_POST['texto']);
	$unidades = $_POST['Unidades'];
	$codigo = $_POST['Codigo_barras'];
	$Precio_compra = $_POST['Precio_Compra'];
	$Precio_venta = $_POST['Precio_venta'];
	$id = limpiarDatos($_POST['id']);
	$thumb_guardada = $_POST['thumb-guardada'];
	$thumb = $_FILES['thumb'];

	# Comprobamos que el nombre del thumb no este vacio, si lo esta
	# significa que el usuario no agrego una nueva thumb y entonces utilizamos la thumb anterior.
	if (empty($thumb['name'])) {
		$thumb = $thumb_guardada;
	} else {
		// De otra forma cargamos la nueva thumb
		// Direccion final del archivo incluyendo el nombre
		# Importante recordar que este archivo se encuentra dentro de la carpeta admin, asi que
		# tenemos que concatenar al inicio '../' para bajar a la raiz de nuestro proyecto.
		$archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];

		move_uploaded_file($_FILES['thumb']['tmp_name'], $archivo_subido);
		$thumb = $_FILES['thumb']['name'];

	}

	$statement = $conexion->prepare('UPDATE productos SET Nombre = :nombre, Marca = :marca,Unidades = :unidades,Codigo_barras = :codigo, Precio_venta = :venta,Precio_compra = :compra, Foto = :thumb WHERE id = :id');
	$statement->execute(array(
		':nombre' => $Nombre,
		':marca' => $marca,
		':unidades' => $unidades,
		':codigo' => $codigo,
		':venta' => $Precio_venta,
		':compra' => $Precio_compra,
		':thumb' => $thumb,
		':id' => $id
	));

	header("Location: " . RUTA . '/admin');
} else {
	$id_producto = id_producto($_GET['id']);

	if (empty($id_producto)) {
		//echo "NO hay id";
		header('Location: ' . RUTA . '/admin');
	}

	// Obtenemos el post por id
	$producto = obtener_producto_por_id($conexion, $id_producto);
	//var_dump($producto);
	// Si no hay post en el ID entonces redirigimos.
	if (!$producto) {
		//echo "no hay producto";
		header('Location: ' . RUTA . 'admin/index.php');
	}
	$producto = $producto[0];
}


require '../views/editar.view.php';

?>