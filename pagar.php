
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
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
	let datos,nuevo= [];
	datos=JSON.parse(localStorage.getItem("Carro"));
	nuevo = Object.entries(datos);
	const largo = nuevo.length;
	console.log(largo);
	localStorage.setItem('Largo', largo);



	for(var i = 0; i < largo; i++){
				console.log('si entro');
				var elemento = document.createElement('tr');
				elemento.innerHTML += ("<td>" + datos[i].id + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].titulo + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].precio + "</td>");
				elemento.innerHTML += ("<td>" + datos[i].cantidad + "</td>");
				elemento.innerHTML += ("<td> <button>Eliminar</button></td>");
				
				tabla.appendChild(elemento);
			}
</script>
<script src="js/pagar.js"></script>
</body>
</html>


 