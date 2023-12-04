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
	<h2>Panel de Control</h2>
	<a href="nuevo.php" class="btn">Nuevo Producto</a>
	<a href="cerrar.php" class="btn">Cerrar Sesion</a>

	<?php foreach($productos as $producto): ?>
	<section class="post">
		<article>
			<h2 class="titulo"><?php echo $producto['id'] . '.- ' . $producto['Nombre']; ?></h2>
			<a href="editar.php?id=<?php echo $producto['id']; ?>">Editar</a>
			<a href="../single.php?id=<?php echo $producto['id']; ?>">Ver</a>
			<a href="borrar.php?id=<?php echo $producto['id']; ?>">Borrar</a>
		</article>
	</section>
	<?php endforeach; ?>
</div>

<section class="paginacion">
	<ul>
		<?php $numero_paginas=numero_paginas($blog_config['producto_por_pagina'],$conexion); ?>

<?php if(pagina_actual()===1): ?>
	<li class="disabled">&laquo;</li>
	<?php else: ?>
		<li ><a href="index.php?p=<?php  echo pagina_actual()-1 ?>">&laquo;</a></li>
		<?php endif; ?>

		<?php for($i=1; $i<=$numero_paginas; $i++): ?>
			<?php if(pagina_actual()===$i): ?>
				<li class="active">
					<?php echo  $i; ?>
				</li>
				<?php else: ?>
				<li><a href="index.php?p=<?php echo $i ?>"><?php echo $i; ?></a></li>
			<?php endif; ?>
		<?php endfor; ?>

		<?php if(pagina_actual()==$numero_paginas): ?>
				<li class="disabled">&raquo;</li>
			<?php else: ?>
		<li><a href="index.php?p=<?php echo pagina_actual()+1; ?>">&raquo;</a></li>
	<?php endif; ?>
		<!-- <li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		 -->
	</ul>
</section>

<?php require '../views/footer.php'; ?>