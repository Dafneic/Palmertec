<?php


extract($_POST);
	require("../Controlador/Conexion.php");


require("Conexion.php");
	


	$sentencia="update proveedor set nombre_razon_social='$RazonSocial', rfc='$RFC',acreditacion='$Acreditacion',nombre_contacto='$Nombre', domicilio='$Domicilio', codigo_postal='$Codigop', telefono='$Telefono', movil='$Movil',correo='$Correo', contraseña='$Contraseña', rol=2 where id_proveedor='$id'";
	echo '<script>alert("Proveedor actualizado")</script> ';
		
		echo "<script>location.href='../Vistas/Proveedores.php'</script>";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al modificar al proveedor ")</script> ';
		echo "<script>location.href='../Vistas/Proveedores.php'</script>";
	}
		

		
	

?>