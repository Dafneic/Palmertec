<?php

	$RazonSocial=$_POST['RazonSocial'];
	$RFC=$_POST['RFC'];
	$Nombre=$_POST['Nombre'];
		$Acreditacion=$_POST['Acreditacion'];
    $Domicilio= $_POST['Domicilio'];
    $Codigop= $_POST['Codigop'];
	$Telefono=$_POST['Telefono'];
	$Movil=$_POST['Movil'];
    $Correo= $_POST['Correo'];
	$Contraseña=$_POST['Contraseña'];
	$CContraseña=$_POST['CContraseña'];

	require("Conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM proveedor WHERE correo='$Correo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($Contraseña==$CContraseña){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atención, ya existe el correo, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Proveedores.php'</script>";	
			}else{
				
				mysqli_query($mysqli,"INSERT INTO proveedor VALUES('','$RazonSocial','$RFC','$Acreditacion','$Nombre','$Domicilio','$Codigop','$Telefono','$Movil','$Correo','$Contraseña','2')");

				echo ' <script language="javascript">alert("proveedor registrado con éxito");</script> ';
				echo "<script>location.href='../Vistas/Proveedores.php'</script>";	
				
			}
			
		}else{
			echo ' <script language="javascript">alert("Las contraseñas no coinciden");</script> ';
					echo "<script>location.href='../Vistas/Registro_Proveedor.php'</script>";
		}

	
?>