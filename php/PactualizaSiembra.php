<?php 

	require_once "conexion.php";

		$conexion=conexion();



	

		$v1=$_POST['idsiembra'];

		$v2=$_POST['cantidad'];

		$v3=$_POST['idproducto'];

		$v4=$_POST['idparcela'];
		$v5=$_POST['notau'];





	$sql="UPDATE siembra set id_producto ='$v3',

			     			   cantidad='$v2',

			     			   id_parcela='$v4',
			     			   nota='$v5'	                   			                    

			             where id='$v1'";

	echo $resul=mysqli_query($conexion,$sql);		             

		                   	

?>	