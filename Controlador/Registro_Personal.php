<?php

	$Personal=$_POST['personal'];
		$Empresa=$_POST['empresa'];
			$Magnitud=$_POST['magnitud'];


	require("Conexion.php");

		$checkemail=mysqli_query($mysqli,"SELECT * FROM personal");
	$check_mail=mysqli_num_rows($checkemail);
			if($check_mail>0){
				
			}else{
				
				mysqli_query($mysqli,"INSERT INTO personal VALUES('','$Empresa','$Magnitud','$Personal')");

				echo ' <script language="javascript">alert("personal registrado con éxito");</script> ';
				echo "<script>location.href='../Vistas/Personal.php'</script>";	
				
	
			}
		

	
?>