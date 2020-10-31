
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
    if(isset($_SESSION['add_carro_servicio']))
    {
        $item_array_id_cart = array_column($_SESSION['add_carro_servicio'],'item_identificacion');
        if(!in_array($_GET['identificacion'],$item_array_id_cart))
        {
            $count = count($_SESSION['add_carro_servicio']);
            $item_array = array(
                    'item_id'        =>$_POST['instrumento'],
                    'item_proveedor'    =>$_POST['Proveedor'],
                        'item_marca'    =>$_POST['marca'],
                    'item_modelo'    =>$_POST['modelo'],
                        'item_identificacion'    =>$_POST['identificacion'],
                    'item_precio'    =>$_POST['precio'],
                    'item_precioTotalCiclos'  =>$_POST['precioTotalCiclos'],
            

            );

            $_SESSION['add_carro_servicio'][$count] = $item_array;
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
                'item_proveedor'    =>$_POST['Proveedor'],
                    'item_marca'    =>$_POST['marca'],
                'item_modelo'    =>$_POST['modelo'],
                    'item_identificacion'    =>$_POST['identificacion'],
                'item_precio'    =>$_POST['precio'],
                'item_precioTotalCiclos'  =>$_POST['precioTotalCiclos'],
            );

            $_SESSION['add_carro_servicio'][0] = $item_array;

        }
}
if(isset($_GET['action']))
{
    if($_GET['action']=='delete')
    {
        foreach ($_SESSION['add_carro_servicio'] AS $key => $value)
        {
            if($value['item_identificacion'] == $_GET['identificacion'])
            {
                unset($_SESSION['add_carro_servicio'][$key]);
                echo '<script>alert("El servicio Fue Eliminado!");</script>';
             
            }
        }
    }
}


?>


   <?php
            if(!empty($_SESSION['add_carro_servicio']))
            {
                $total = 0;
                foreach ($_SESSION['add_carro_servicio'] AS $key => $value)
                {
                 ?>
                    <tbody align="center">
            <tr>
                <td><?php echo  $prov = $value['item_proveedor'];?></td>
                <td><?php echo $cant = $value['item_cantidad'];?></td>
                <td><?php echo $inst = $value['item_id'];?></td>
                   <td><?php echo $mar = $value['item_marca'];?></td>
                <td><?php echo $mod = $value['item_modelo'];?></td>
                <td><?php echo $alc = $value['item_alcance'];?></td>
                <td><?php echo $puntc = $value['item_puntosc'];?></td>
                <td><?php echo $ident = $value['item_identificacion'];?></td>
                <td>$<?php echo $pre = $value['item_precio'];?></td>
                 <td>$<?php echo $ser = $value['item_servicio'];?></td>
       


                <td>$<?php echo number_format($value['item_cantidad'] * $value['item_precio'],2);?></td>
                       <td><a class="btn btn-danger" href="carrito.php?action=delete&instrumento=<?php echo $value['item_id'];?>">Quitar del carrito</a></td>
            </tr>
           <?php
                    $total = $total + ($value['item_cantidad']  * $value['item_precio']);

                        require("../Controlador/Conexion.php");



   
          mysqli_query($mysqli,"INSERT INTO pedidos VALUES('','$NombreR','$Domicilio','$Telefono','$Movil','$prov','$inst','$cant','$mar','$mod','$alc','$puntc','$ident','$pre','$total','realizado',' ',' ',' ')");


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
         






        echo "<script>location.href='../Vistas/pedido_realizado_2.php'</script>";


                }
           ?>



            <tr>
                <td colspan="3" align="right"><strong>Total</strong></td>
                <td>$<strong style="color:green;"><?php echo number_format($total,2)?></strong></td>
                <td></td>
            </tr>
          <?php

            }else{

                ?>
              
            <?php

            }

            ?>



   
       
              
          
            

