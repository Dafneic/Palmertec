<?php 
$conexion=mysqli_connect('localhost','root','','palmertec');
$nombre=$_POST['nombre'];

	$sql=("SELECT * FROM proveedor where nombre_razon_social='$nombre'");

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Acreditación</label> 
			<select id='Acreditacion' name='Acreditacion' class='form-control'>";

	while ($arreglo=mysqli_fetch_array($result)) {
	
		$cadena=$cadena.'<option value="'.$arreglo[3].'">'.$arreglo[3].'</option>';


	}

	echo  $cadena."</select>";
	

?>

  
       
       

   