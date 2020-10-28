

   <?php
   require("Conexion.php");
	$Categoria=$_POST['Categoria'];
      
        $sql=("SELECT * FROM categoria where id_categoria='$Categoria'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
             $Nombre_categoria= ($arreglo[1]);
                
            
            
          
 
        }

     
         

      ?>

       <?php
   require("Conexion.php");
	
		$Servicio= $_POST['Servicio'];
      
        $sql=("SELECT * FROM servicio where id_servicio='$Servicio'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
             $Nombre_servicio= ($arreglo[1]);
                
            
            
          
 
        }

     
         

      ?>

       <?php
   require("Conexion.php");
	
		$Subservicio= $_POST['Subservicio'];
      
        $sql=("SELECT * FROM subservicios where id='$Subservicio'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
             $Nombre_subservicio= ($arreglo[1]);
                
            
            
          
 
        }

     
         

      ?>





<?php

	$Laboratorio=$_POST['Laboratorios'];
	$Acreditacion=$_POST['Acreditacion'];

	
    $Exactitud= $_POST['Exactitud'];
    $AlcanzeMi= $_POST['AlcanceMi'];
	$AlcanzeMa=$_POST['AlcanceMa'];
    $porcentaje=$_POST['porcentaje'];
      $recoleccion=$_POST['recoleccion'];
    $Precio= $_POST['precio'];
    $Puntoadicional= $_POST['puntoadicional'];
  $Total=$_POST['total'];
  $Totalp=$_POST['totalpalmertec'];
  $Serviciourgente= $_POST['serviciourgente'];
    $Costoadicional= $_POST['costoadicional'];
  $Totalapagar=$_POST['totalapagar'];
    $Totalpu=$_POST['totalpalmertecurgente'];
	require("Conexion.php");
	
				
				mysqli_query($mysqli,"INSERT INTO cotizaciones VALUES('','$Laboratorio','$Acreditacion','$Nombre_categoria','$Nombre_servicio','$Nombre_subservicio','$Exactitud','$AlcanzeMi','$AlcanzeMa','$porcentaje','$recoleccion','$Precio','$Puntoadicional','$Total','$Totalp','$Serviciourgente','$Costoadicional','$Totalapagar','$Totalpu')");

				echo ' <script language="javascript">alert("Cotización registrada con éxito");</script> ';
				echo "<script>location.href='../Vistas/Areas_Laboratorio.php'</script>";	
	
			
		

	
?>