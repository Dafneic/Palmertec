<?php 
$conexion=mysqli_connect('localhost','root','','palmertec');
$nombre=$_POST['nombres'];
     $Instrumento=$_POST['Instrumento'];

	$sql=("SELECT * FROM cotizaciones where laboratorio='$nombre' and instrumento='$Instrumento'");

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Precio</label> 
			<select id='precio' name='precio' class='form-control'>";

	while ($arreglo=mysqli_fetch_array($result)) {
	
		$cadena=$cadena.'<option value="'.$arreglo[14].'">'.$arreglo[14].'</option>';


	}

	echo  $cadena."</select>";


	

?>

  
       
       
