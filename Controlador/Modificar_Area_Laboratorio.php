

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
extract($_POST);

	$Laboratorio=$_POST['Laboratorio'];
	$Acreditacion=$_POST['Acreditacion'];

	
    $Exactitud= $_POST['Exactitud'];
    $AlcanceMi= $_POST['AlcanceMi'];
	$AlcanceMa=$_POST['AlcanceMa'];

	require("Conexion.php");
	
				
			 $sentencia="update area_laboratorio set laboratorio='$Laboratorio', acreditacion='$Acreditacion',categoria='$Nombre_categoria',servicio='$Nombre_servicio', subservicio='$Nombre_subservicio', exactitud='$Exactitud', alcance_minimo='$AlcanceMi', alcance_maximo='$AlcanceMa' where id_area_laboratorio='$id'";
  echo '<script>alert("Área de laboratorio actualizada")</script> ';
    
    echo "<script>location.href='../Vistas/Areas_Laboratorio.php'</script>";
  $resent=mysqli_query($mysqli,$sentencia);
  if ($resent==null) {
    echo '<script>alert("Error al modificar la área de laboratorio ")</script> ';
    echo "<script>location.href='../Vistas/Areas_Laboratorio.php'</script>";
  }
    

			
		

	
?>