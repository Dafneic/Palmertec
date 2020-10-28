<?php


extract($_GET);
	require("../Controlador/Conexion.php");

	require("Conexion.php");

			
	$sentencia="update pedidos set pago='realizado' where id_pedido='$id'";
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo '<script>alert("Error al aceptar el pago ")</script> ';
		echo "<script>location.href='../Vistas/Pedidos_admin.php'</script>";
	}else {
		echo '<script>alert("Pago aceptado")</script> ';
		
		echo "<script>location.href='../Vistas/Pedidos_admin.php'</script>";

		}
	
?>