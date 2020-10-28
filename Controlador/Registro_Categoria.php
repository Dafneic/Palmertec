<?php


	$Nombre=$_POST['Nombre'];


	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM categoria WHERE nombre='$Nombre'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe la categoria, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Registro_Categoria.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO categoria VALUES('','$Nombre')");

				echo ' <script language="javascript">alert("Categoria registrada con éxito");</script> ';
				echo "<script>location.href='../Vistas/Categorias.php'</script>";	
				
			}
			


	
?>