<?php  
include "db.php";
$db=connect();
// $query=$db->query("SELECT nombre,a.precio,precio_ciclo,cotizacionservicio_id FROM cotizaciones_etapas a INNER JOIN subservicios b ON a.etapas = b.id WHERE cotizacionservicio_id =$_GET[Servicio]");
//TIPO DE SERVICIO POR COTIZACION REGISTRADA 
$query=$db->query("SELECT a.id_etapas as id,nombre,a.precio,precio_ciclo,cotizacionservicio_id,total_palmertec, total_pagar_palmertec FROM cotizaciones_etapas a INNER JOIN subservicios b ON a.etapas = b.id INNER JOIN cotizaciones_servicios c ON a.cotizacionservicio_id = c.id_cotizacion WHERE c.magnitud  =('$_GET[nombreProducto]')");
$rows = array();
while($r=$query->fetch_object()){ 
	//$states[]=$r;
	$rows[] = $r; 
}
print json_encode($rows);
?>

