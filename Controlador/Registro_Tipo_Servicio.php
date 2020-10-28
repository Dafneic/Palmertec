<?php


	$Nombre=$_POST['Nombre'];

	$Categoria=$_POST['Categoria'];


	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM servicio WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe la ese servicio, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Registro_tipo_servicios.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO servicio VALUES('','$Nombre','$Categoria')");

				echo ' <script language="javascript">alert("Servicio registrada con éxito");</script> ';
				echo "<script>location.href='../Vistas/Tipos_Servicio.php'</script>";	
				
			}
			


	
?>