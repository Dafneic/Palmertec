<?php
include "db.php";
$db=connect();
$query=$db->query("select * from subservicios where servicio_id=$_GET[Servicio]");
$states = array();
while($r=$query->fetch_object()){ $states[]=$r; }
if(count($states)>0){
print "<option value=''>-- SELECCIONE --</option>";
foreach ($states as $s) {
	print "<option value='$s->id'>$s->nombre</option>";
}
}else{
print "<option value=''>-- NO HAY DATOS --</option>";
}
?>