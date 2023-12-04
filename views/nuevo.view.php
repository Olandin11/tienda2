<?php require 'header.php' ?>
<link rel="stylesheet" href="<?php echo RUTA; ?>css/skeleton.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/custom.css">
<style>
	.contenedor {
	max-width: 1000px;
	width: 90%;
	margin: auto;
}
h1, h2, h3, h4, h5, h6 {
    font-family: "Oswald", Arial, Sans-serif;
    font-weight: normal;
}
	.post {
	width: 100%;
	background: #fff;
	box-shadow: 0px 0px 5px rgba(0,0,0, .5);
	margin-bottom: 30px;
	padding: 30px;
	color:black;

	
}

.post article .titulo {
	font-family: "Oswald", Arial, Sans-serif;
	font-size: 28px;
	font-weight: normal;
	line-height: 28px;
	margin-bottom: 10px;

}
.post article .titulo a {
	color:#000;
	}

.post article .fecha {
	color:#747474;
	font-size: 14px;
	margin-bottom: 20px;
}

.post article .thumb {
	margin-bottom: 20px;
}

.post article .thumb img {
	vertical-align: top;
	width: 100%;
}

.post article .extracto {
	font-size: 14px;
	line-height: 20px;
	margin-bottom: 20px;
}

.post article .continuar {
	color:#BB1F35;
	font-weight: bold;
}

.btn {
	padding: 15px;
	display: inline-block;
	margin: 15px 0;
	background: #595959;
	color:#fff;
	font-size: 1em;
	font-family: Arial, sans-serif, helvetica;
	border-radius: 2px;
	border:none;
}

.btn:hover {
	text-decoration: none;
	background: #BB1F35;
}
a {
    text-decoration: none;
    color: #BB1F35;
}

</style>
	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Nuevo producto</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="formulario" method="post">
					<input type="hidden" name="id" placeholder="id">
					<input type="text" name="Nombre" placeholder="Nombre" >
					<input type="text" name="Marca" placeholder="Marca" >
					<input type="text" name="Unidades" placeholder="Unidades">
					<input type="text" name="Codigo_barras" placeholder="Codigo">
					<input type="text" name="Precio_Compra" placeholder="Precio_Compra">
					<input type="text" name="Precio_Venta" placeholder="Precio_Venta">
					<input type="file" name="thumb">

					<input type="submit" value="Crear producto">
				</form>
			</article>
		</div>
	</div>

<?php require 'footer.php'; ?>