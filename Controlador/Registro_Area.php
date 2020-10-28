<?php


	$Nombre=$_POST['Nombre'];


	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM area WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe la área, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Registro_Area.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO area VALUES('','$Nombre')");

				echo ' <script language="javascript">alert("Área registrada con éxito");</script> ';
				echo "<script>location.href='../Vistas/Areas.php'</script>";	
				
			}
			


	
?>