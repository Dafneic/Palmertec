<?php


extract($_POST);
	require("../Controlador/Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM categoria WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe la categoria, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Categorias.php'</script>";	
			}else{


	$sentencia="update categoria set nombre='$Nombre' where id_categoria='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al modificar la categoria ")</script> ';
		echo "<script>location.href='../Vistas/Categorias.php'</script>";
	}else {
		echo '<script>alert("Categoria actualizada")</script> ';
		
		echo "<script>location.href='../Vistas/Categorias.php'</script>";

		}
	}
?>