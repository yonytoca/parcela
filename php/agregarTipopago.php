<?php
	require_once "conexion.php";
	$conexion=conexion();

	$v1=$_POST['nombre']; 
	$v2=$_POST['nota'];

	$sql="INSERT INTO factura_condicion_pago (descripcion, nota) 
					VALUES ('$v1', '$v2')";
	echo $resul=mysqli_query($conexion,$sql);	 	
?>