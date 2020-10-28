<?php

	$RazonSocial=$_POST['RazonSocial'];
	$RFC=$_POST['RFC'];
	$Nombre=$_POST['Nombre'];
    $Domicilio= $_POST['Domicilio'];
    $Giro= $_POST['Giro'];
	$Telefono=$_POST['Telefono'];
	$Movil=$_POST['Movil'];
    $Correo= $_POST['Correo'];
	$Contraseña=$_POST['Contraseña'];
	$CContraseña=$_POST['CContraseña'];

	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM cliente WHERE correo='$Correo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($Contraseña==$CContraseña){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe el correo, verifique sus datos");</script> ';
				echo "<script>location.href='../Index.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO cliente VALUES('','$RazonSocial','$RFC','$Nombre','$Domicilio','$Giro','$Telefono','$Movil','$Correo','$Contraseña','1')");

				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='../Vistas/Login.php'</script>";	
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
					echo "<script>location.href='../Vistas/Registro_Cliente.php'</script>";
		}

	
?>