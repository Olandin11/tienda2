<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
	<h1>Llenado de información</h1>
		<form action="" method="POST">
			<label for="Nombre">Nombre:  </label><input type="text" class="Nombre"><br>
			<label for="Apellidos">Apellidos:  </label><input type="text" class="Apellidos"><br>
			<label for="Fecha entrega">Fecha:  </label><input type="date" class=""><br>
			<label for=""></label>Otra:  <input type="text" class=""><br><br>
			<button id="info">Confirmar</button>
		</form>


	<table id="tabla">
		<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>precio</th>
					<th>Cantidad</th>
					
				</tr>

	</table>
	<p>Total</p>
	<button id="pagar">Pagar</button>
	<script type="text/javascript">
	let datos= [];
	datos=JSON.parse(localStorage.getItem("Carro"));
	const largo=localStorage.getItem("Largo");
	console.log(datos);



	for(var i = 0; i < largo; i++){
				console.log('si entro');
				var elemento = document.createElement('tr');
				elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].titulo + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].precio + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].cantidad + "</td>");
				
				
				tabla.appendChild(elemento);
			}
</script>
<script src="js/pagar.js"></script>
</body>
</html>