<?php  
include "db.php";
$db=connect();
$query=$db->query("select * from subservicios where servicio_id=$_GET[Servicio]");
$rows = array();
while($r=$query->fetch_object()){ 
	//$states[]=$r;
	$rows[] = $r; 
}
print json_encode($rows);
?>

