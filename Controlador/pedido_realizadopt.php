
<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==2 or 0) {
  header("Location:../Index.php");
}
?>
 <?php 
$id_cliente=$_SESSION['id_cliente'];

        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM cliente WHERE id_cliente=$id_cliente";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $NombreR=$row[1];
                $Domicilio=$row[4];

   $Telefono=$row[7];
   $Movil=$row[8];               
            }


     ?>
     <?php

if(isset($_POST['agregar']))
{
    if(isset($_SESSION['add_carro']))
    {
        $item_array_id_cart = array_column($_SESSION['add_carro'],'item_identificacion');
        if(!in_array($_GET['identificacion'],$item_array_id_cart))
        {
            $count = count($_SESSION['add_carro']);
            $item_array = array(
                    'item_id'        =>$_POST['instrumento'],
                    'item_proveedor'    =>$_POST['proveedor'],
                    'item_cantidad'    =>$_POST['cantidad'],
                        'item_marca'    =>$_POST['marca'],
                    'item_modelo'    =>$_POST['modelo'],
                    'item_alcance'  =>$_POST['alcance'],
                    'item_puntosc'    =>$_POST['puntosc'],
                        'item_identificacion'    =>$_POST['identificacion'],
                    'item_precio'    =>$_POST['precio'],
                    'item_total'  =>$_POST['total'],
                     'item_servicio'  =>$_POST['id_servicio'],

            );

            $_SESSION['add_carro'][$count] = $item_array;
               echo '<script>alert("Servicio agregado!");</script>';
 echo '<script>window.location="Carrito.php";</script>';
        }else
            {
                echo '<script>alert("El servicio ya existe!");</script>';
                       
            }
    }
    else
        {
            $item_array = array(
                'item_id'        =>$_POST['instrumento'],
                    'item_proveedor'    =>$_POST['proveedor'],
                    'item_cantidad'    =>$_POST['cantidad'],
                        'item_marca'    =>$_POST['marca'],
                    'item_modelo'    =>$_POST['modelo'],
                    'item_alcance'  =>$_POST['alcance'],
                    'item_puntosc'    =>$_POST['puntosc'],
                        'item_identificacion'    =>$_POST['identificacion'],
                    'item_precio'    =>$_POST['precio'],
                    'item_total'  =>$_POST['total'],
                     'item_servicio'  =>$_POST['id_servicio'],
            );

            $_SESSION['add_carro'][0] = $item_array;

        }
}
if(isset($_GET['action']))
{
    if($_GET['action']=='delete')
    {
        foreach ($_SESSION['add_carro'] AS $key => $value)
        {
            if($value['item_identificacion'] == $_GET['identificacion'])
            {
                unset($_SESSION['add_carro'][$key]);
                echo '<script>alert("El servicio Fue Eliminado!");</script>';
             
            }
        }
    }
}


?>

<?php
include_once '../Controlador/config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;

}
?>
   <?php
            if(!empty($_SESSION['add_carro']))
            {
                $total = 0;
                foreach ($_SESSION['add_carro'] AS $key => $value)
                {
                 ?>
                    <tbody align="center">
            <tr>
                <td><?php   $prov = $value['item_proveedor'];?></td>
                <td><?php  $cant = $value['item_cantidad'];?></td>
                <td><?php  $inst = $value['item_id'];?></td>
                   <td><?php  $mar = $value['item_marca'];?></td>
                <td><?php  $mod = $value['item_modelo'];?></td>
                <td><?php  $alc = $value['item_alcance'];?></td>
                <td><?php  $puntc = $value['item_puntosc'];?></td>
                <td><?php  $ident = $value['item_identificacion'];?></td>
                <td><?php  $pre = $value['item_precio'];?></td>
                 <td><?php  $ser = $value['item_servicio'];?></td>
       


                <td><?php  number_format($value['item_cantidad'] * $value['item_precio'],2);?></td>
              
            </tr>
           <?php
                    $total = $total + ($value['item_cantidad']  * $value['item_precio']);

                        require("../Controlador/Conexion.php");



   
          mysqli_query($mysqli,"INSERT INTO pedidos VALUES('','$NombreR','$Domicilio','$Telefono','$Movil','$prov','$inst','$cant','$mar','$mod','$alc','$puntc','$ident','$pre','$total','pendiente','$tamanio','$tipo','$nombre')");


   require("Conexion.php");
  
      
        $sql=("SELECT * FROM servicio where id_servicio='$ser'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
           echo  $Nombre_servicio= ($arreglo[1]);
                
            
            
          
 
        }

       $sql=("SELECT * FROM personal where empresa='$prov' and magnitud='$Nombre_servicio'");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
           
            
             $personal= ($arreglo[3]);
               
    echo  $np= $personal - 1;
          echo $prov;
 
      $sentencia="UPDATE personal SET personas = '$np' WHERE empresa='$prov' and magnitud='$Nombre_servicio'";

     $resent=mysqli_query($mysqli,$sentencia);
         

     

         

        echo "<script>location.href='../Vistas/pedido_realizado.php'</script>";







        }
           ?>
            <tr>
           
            </tr>
          <?php

         }   }else{

                ?>
              
            <?php

            }

            ?>



   
       
              
          
            

