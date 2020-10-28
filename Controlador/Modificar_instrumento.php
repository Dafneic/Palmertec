<?php


extract($_POST);
	require("../Controlador/Conexion.php");
	


	$sentencia="UPDATE subservicios SET nombre = '$Nombre', servicio_id='$Servicio' WHERE id= $id";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al modificar el servicio ")</script> ';
		echo "<script>location.href='../Vistas/Instrumentos.php'</script>";
	}else {
		echo '<script>alert("Servicio actualizado")</script> ';
		
		echo "<script>location.href='../Vistas/Instrumentos.php'</script>";

		}
	
?>