<?php


	$Nombre=$_POST['Nombre'];
	$Magnitud=$_POST['Magnitud'];


	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM subservicios WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe el instrumento, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Registro_Instrumento.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO subservicios VALUES('','$Nombre','$Magnitud')");

				echo ' <script language="javascript">alert("Instrumento registrado con éxito");</script> ';
				echo "<script>location.href='../Vistas/Instrumentos.php'</script>";	
				
			}
			


	
?>