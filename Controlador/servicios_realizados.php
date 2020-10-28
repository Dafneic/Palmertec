

   <?php
   require("Conexion.php");
	$id=$_GET['id'];
      
        $sql=("SELECT * FROM pedidos where id_pedido='$id'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 

         while($arreglo=mysqli_fetch_array($query)){
           
            
             $id= ($arreglo[0]);
                $cliente= ($arreglo[1]);
                   $domicilio= ($arreglo[2]);
                      $telefono= ($arreglo[3]);   
                         $movil= ($arreglo[4]);
                            $proveedor= ($arreglo[5]);
                               $instrumento= ($arreglo[6]);
                                  $cantidad= ($arreglo[7]);
                                     $marca= ($arreglo[8]);
                                        $modelo= ($arreglo[9]);
                                           $alcance= ($arreglo[10]);
                                              $puntosc= ($arreglo[11]);
                                                 $identificacion= ($arreglo[12]);
                                                    $precio= ($arreglo[13]);
                                                       $total= ($arreglo[14]);
                                                          $pago= ($arreglo[15]);
                
            
            
          
 
        }

    

      ?>
<?php


	require("Conexion.php");
	


       	mysqli_query($mysqli,"INSERT INTO servicios_realizados VALUES('id','$cliente','$domicilio','$telefono','$movil','$proveedor','$instrumento','$cantidad','$marca','$modelo','$alcance','$puntosc','$identificacion','$precio','$total','$pago')");








   require("Conexion.php");
  

      
        $sql=("SELECT * FROM subservicios where nombre='$instrumento'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
           echo  $id_magnitud= ($arreglo[2]);
                
            
            
          
 
        }


         $sql=("SELECT * FROM servicio where id_servicio='$id_magnitud'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
           echo  $nombre_m = ($arreglo[1]);
                
            
            
          
 
        }

       $sql=("SELECT * FROM personal where empresa='$proveedor' and magnitud='$nombre_m'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
             $personal= ($arreglo[3]);
               
    echo  $np= $personal + 1;

 
      $sentencia="UPDATE personal SET personas = '$np' WHERE empresa='$proveedor' and magnitud='$nombre_m'";

     $resent=mysqli_query($mysqli,$sentencia);
         









}




	  
 $id= $_GET['id'];
      $idborrar= $_GET['idborrar'];
        require("Conexion.php");
        $sql=("SELECT * FROM pedidos");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
      

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM pedidos WHERE id_pedido=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
        
          }
      }

 
				echo "<script>location.href='../Vistas/servicios_realizados.php'</script>";	
         
      ?>