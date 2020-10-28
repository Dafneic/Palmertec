<?php


extract($_POST);
	require("../Controlador/Conexion.php");

	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM area WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe la área, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Areas.php'</script>";	
			}else{
	$sentencia="update area set nombre='$Nombre' where id_area='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al modificar la área ")</script> ';
		echo "<script>location.href='../Vistas/Areas.php'</script>";
	}else {
		echo '<script>alert("Área actualizada")</script> ';
		
		echo "<script>location.href='../Vistas/Areas.php'</script>";

		}
	}
?>