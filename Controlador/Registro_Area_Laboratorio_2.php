

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

	$Laboratorio=$_POST['Laboratorios'];
	$Acreditacion=$_POST['Acreditacion'];

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
	
    
  
    mysqli_query($mysqli,"INSERT INTO cotizaciones_servicios VALUES('','$Laboratorio','$Acreditacion','$Nombre_categoria','$Nombre_servicio','$AlcanzeMi','$AlcanzeMa','$porcentaje','$recoleccion','$Precio','$Puntoadicional','$Total','$Totalp','$Serviciourgente','$Costoadicional','$Totalapagar','$Totalpu')");
                
    $pruebaaa= mysqli_insert_id($mysqli);
                
    # La lista de nombres; por defecto vacía
    $Subservicio = [];
    $Item_Precio_subservicio = [];
    if (isset($_POST["Subservicio"]) && isset($_POST["Item_Precio_subservicio"])) {
        $Subservicio = $_POST["Subservicio"];
        $Item_Precio_subservicio = $_POST["Item_Precio_subservicio"];
        // print_r($Subservicio);
        // print_r($precio);

        
        foreach( $Subservicio as $key => $n ) {
         //   print "subservicio ".$Subservicio[$key]."\n";
       //     print "subservicio ".$Item_Precio_subservicio[$key]."\n";
           // print "El subservicio es ".$n." y el precio es ".$Item_Precio_subservicio[$key].", thanks\n";
           mysqli_query($mysqli,"INSERT INTO cotizaciones_etapas  VALUES('','$Item_Precio_subservicio[$key]','$Subservicio[$key]','$pruebaaa')");
        }
    }

    echo ' <script language="javascript">alert("Cotización registrada con éxito");</script> ';
    	echo "<script>location.href='../Vistas/Areas_Laboratorio_2.php'</script>";	
	
		
    ?>