<?php 
require 'admin/config.php';
require 'functions.php';



$conexion = conexion($bd_config);

if (!$conexion) {
    echo "no hay bd";
    //header('Location: error.php');
}
$arrayRecibido=json_decode($_POST["arrayDeValores"], true );
$id=[];
$cantidad=[];
$unidades=[];
$nuevo=[];
//const largo=localStorage.getItem("Largo");
for ($i=0; $i < 3; $i++) { 
	$identificador=$arrayRecibido[$i]['id'];
	array_push($id,$identificador);
	$cant=$arrayRecibido[$i]['cantidad'];
	array_push($cantidad,$cant);
	$uni=$arrayRecibido[$i]['unidades'];
	array_push($unidades,$uni);
}


for ($i=0; $i < 3 ; $i++) { 
	$unidades[$i]=substr($unidades[$i],22);
	$nuevo[$i]=$unidades[$i]-$cantidad[$i];
}
/*print_r($id) ;
print_r($cantidad);
print_r($unidades);
print_r($nuevo);*/
for ($i=0; $i < 3; $i++) { 
	$sql="UPDATE productos SET unidades='$nuevo[$i]' WHERE Codigo_Barras=$id[$i]";

	$resultado= $conexion->query($sql);
	if ($resultado) {
		echo "Se actualizo la cantidad del id ". $id[$i];
	}
}
		



 ?>