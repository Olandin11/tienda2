<?php require 'header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>css/skeleton.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/custom.css">
</head>
<body>
	<div class="single">
		<?php
		$nombre = $producto['Foto'];
		$ext  = explode('.', $nombre);
		$ext  = end($ext);
		$nombre =  str_replace(".".$ext, "single.".$ext, $nombre);
		
		
		?>
		<div class="fila">
			<div class="imagen">
			<img class="imagen" src="./imagenes/<?php echo $nombre; ?>" alt="<?php echo $producto['Nombre'] ?>" >
			</div>
			<div class="izquierda">
			<h2 class="Nombre"><?php echo $producto['Nombre'] ?>
			<p class="Precio"><p class="precio-single"><?php echo($producto['Precio_venta']); ?></p></p>
			</h2>
			</div>
			<div class="derecha">
				<p>Texto de ejemplo</p>
				<a href="#" class="u-full-width button-primary button input agregar-carrito" data-id="<?php echo $producto['Codigo_Barras']; ?>">Agregar Al Carrito</a>
			</div>
		</div>
		
	</div>
	<?php require 'footer.php'; ?>
	<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <script type="text/javascript"
  src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script src="js/carrito.js"></script>
    <script src="js/pedido.js"></script>
</body>

</html>

	

