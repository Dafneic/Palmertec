<?php
	require("Conexion.php");

	$a=$_POST['dia'];
	$a2=$_POST['horai'];
	$a3=$_POST['horaf'];
$empresa=$_POST['empresa'];


		$mi = new MultipleIterator();
$mi->attachIterator(new ArrayIterator($a));
$mi->attachIterator(new ArrayIterator($a2));
$mi->attachIterator(new ArrayIterator($a3));

foreach ( $mi as $value ) {
    list($dia, $horai, $horaf) = $value;
    $checkemail=mysqli_query($mysqli,"SELECT * FROM disponibilidad WHERE Empresa='$empresa'");
	$check_mail=mysqli_num_rows($checkemail);
		
			if($check_mail==7){
				echo ' <script language="javascript">alert("Atención, ya no puede registrar mas, su disponibilidad esta completa, verifique sus datos");</script> ';
				echo "<script>location.href='../Vistas/Disponibilidad.php'</script>";	
			}else{
mysqli_query($mysqli,"INSERT INTO disponibilidad VALUES('','$empresa','$dia','$horai','$horaf')");
				echo ' <script language="javascript">alert("Horario de atención registrado con éxito");</script> ';
				echo "<script>location.href='../Vistas/Disponibilidad.php'</script>";
			}

}




				
		



			


	
?>