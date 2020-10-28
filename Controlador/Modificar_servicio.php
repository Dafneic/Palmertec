<?php


extract($_POST);
	require("../Controlador/Conexion.php");
	


	$sentencia="UPDATE servicio SET nombre = '$Nombre', categoria_id='$Categoria' WHERE id_servicio= $id;";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al modificar el servicio ")</script> ';
		echo "<script>location.href='../Vistas/Tipos_Servicio.php'</script>";
	}else {
		echo '<script>alert("Servicio actualizado")</script> ';
		
		echo "<script>location.href='../Vistas/Tipos_Servicio.php'</script>";

		}
	
?>