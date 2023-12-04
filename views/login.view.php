<?php require 'header.php' ?>
<link rel="stylesheet" href="<?php echo RUTA; ?>css/skeleton.css">
<link rel="stylesheet" href="<?php echo RUTA; ?>css/custom.css">
<style>
	/* --- Formularios --- */
.formulario {
	width: 100%;
	overflow: hidden;
}

.formulario input[type="text"],
.formulario input[type="email"],
.formulario input[type="password"],
.formulario textarea {
	border: 1px solid #A8A8A8;
	border-radius: 2px;
	padding: 16px;
	width: 100%;
	display: block;
	margin-bottom:20px;
	font-family:Arial, sans-serif, helvetica;
	font-size: 1em;
	color:#141938;
}

.formulario input[type="text"]:focus,
.formulario input[type="email"]:focus,
.formulario input[type="password"]:focus,
.formulario textarea:focus {
	border: 2px solid #595959;
	padding: 15px;
}

.formulario textarea {
	max-width: 100%;
	min-width: 100%;
	min-height: 300px;
}

.formulario input[type="submit"]{
	
	background: #595959;
	color:#fff;
	font-size: 1em;
	font-family: Arial, sans-serif, helvetica;
	border-radius: 2px;
	border:none;
	float: right;
	cursor: pointer;
}

.formulario input[type="submit"]:hover{
	background: #BB1F35;
}

</style>

	<div class="contenedor">
		<div class="post">
			<article>
				<h2 class="titulo">Inicia Sesion</h2>
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post">
					<input type="text" name="usuario" placeholder="Usuario">
					<input type="password" name="password" placeholder="Contraseña">
					<input type="submit" value="Iniciar Sesion">
				</form>
			</article>
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