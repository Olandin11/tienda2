<?php //require 'header.php'; ?>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Editar</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" enctype="multipart/form-data" method="post">
					<input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
					<input type="text" name="Nombre" value="<?php echo $producto['Nombre'] ?>">
					<input type="text" name="Marca" value="<?php echo $producto['Marca']; ?>">
					<input type="text" name="Unidades" value="<?php echo $producto['Unidades']; ?>">
					<input type="text" name="Codigo_barras" value="<?php echo $producto['Codigo_barras']; ?>">
					<input type="text" name="Precio_Compra" value="<?php echo $producto['Precio_Compra']; ?>">
					<input type="text" name="Precio_venta" value="<?php echo $producto['Precio_venta']; ?>">
					<input type="file" name="thumb">
					<input type="hidden" name="thumb-guardada" value="<?php echo $producto['Foto']; ?>">

					<input type="submit" value="Guardar Datos">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>