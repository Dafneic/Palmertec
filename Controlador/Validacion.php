<?php

session_start();
	require("Conexion.php");

	$Correo=$_POST['Correo'];
	$Contraseña=$_POST['Contraseña'];


	$sql2=mysqli_query($mysqli,"SELECT * FROM administrador WHERE correo='$Correo'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($Contraseña==$f2['contraseña']){
			$_SESSION['id_administrador']=$f2['id_administrador'];
			$_SESSION['nombre']=$f2['nombre'];
			$_SESSION['rol']=$f2['rol'];

			echo '<script>alert("BIENVENIDO A PALMERTEC ADMINISTRADOR")</script> ';
			echo "<script>location.href='../Vistas/Panel_Administrador.php'</script>";
		
		}
	}

	$sql3=mysqli_query($mysqli,"SELECT * FROM cliente WHERE correo='$Correo'");
	if($f3=mysqli_fetch_assoc($sql3)){
		if($Contraseña==$f3['contraseña']){
			$_SESSION['id_cliente']=$f3['id_cliente'];
			$_SESSION['nombre_contacto']=$f3['nombre_contacto'];
			$_SESSION['rol']=$f3['rol'];

			echo '<script>alert("BIENVENIDO A PALMERTEC")</script> ';
			echo "<script>location.href='../Vistas/Panel_Cliente.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM proveedor WHERE correo='$Correo'");
	if($f=mysqli_fetch_assoc($sql)){
		if($Contraseña==$f['contraseña']){
			$_SESSION['id_proveedor']=$f['id_proveedor'];
			$_SESSION['nombre_contacto']=$f['nombre_contacto'];
			$_SESSION['nombre_razon_social']=$f['nombre_razon_social'];			
			$_SESSION['rol']=$f['rol'];

			echo '<script>alert("BIENVENIDO A PALMERTEC PROVEEDOR")</script> ';
			echo "<script>location.href='../Vistas/Panel_Proveedor.php'</script>";
		}else{
			echo 'CONTRASEÑA INCORRECTA';
		
			echo "<script>location.href='../Index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../Index.php'</script>";	

	}

?>