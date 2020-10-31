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
                    'item_id'        =>$_GET['instrumento'],
                    'item_Proveedor'    =>$_POST['Proveedor'],
                        'item_marca'    =>$_POST['marca'],
                    'item_modelo'    =>$_POST['modelo'],
                        'item_identificacion'    =>$_POST['identificacion'],
                    'item_precio'    =>$_POST['precio'],
                    'item_precioTotalCiclos'  =>$_POST['precioTotalCiclos'],
            );

            $_SESSION['add_carro_servicio'][$count] = $item_array;
               echo '<script>alert("Servicio agregado!");</script>';
 echo '<script>window.location="Carrito_2.php";</script>';
        }else
            {
                echo '<script>alert("El servicio ya existe!");</script>';
            }
    }
    else
        {
            $item_array = array(
                'item_id'        =>$_GET['instrumento'],
                'item_Proveedor'    =>$_POST['Proveedor'],
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
                 echo '<script>window.location="Carrito_2.php";</script>';
             
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Administrador</title>
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/site.css" />
    <link rel="stylesheet" href="../lib/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    <link rel="stylesheet" href="css/carrs.css">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>
<body>
    <script src="https://www.paypal.com/sdk/js?client-id=AV_jAxBULbgjM6dFfvls8EPGLY2QItQu8X2WaMMDGnRPV_WJmwqcF54eI1yWzXyDwaCDWgCPfD4jBNwm&currency=MXN"></script>
    <header style="background-color:#f1eeee ">
        <nav class="navbar  navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <div align="left">
                    <img src="../img/palmertec.png" />
                </div>
        <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu">
            <ul>
                    <li><a href="Panel_cliente.php" style="font-weight: bold;">Inicio</a></li>
            <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                 <li ><a  href="https://www.facebook.com/PalmerTecMx"><i class="fab fa-facebook-f fa-2x fa-lg" ></i></a></li>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   <main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-3 p-3 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">



     
   
   <div style="clear:both"></div>
    <br/>
    <h3>Detalle de la Orden</h3>
     <table class='table table-striped table-sm table-responsive-sm'>
        <thead style='color: blue' background='gray' align="center">
                    <tr align="center">
                 <th>Proveedor</th>
            <th>Equipo</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Serie</th>
            <th>Identificación</th>
              <th>Total</th>
            </tr>

            <?php
            if(!empty($_SESSION['add_carro_servicio']))
            {
                $total = 0;
                foreach ($_SESSION['add_carro_servicio'] AS $key => $value)
                {
                 ?>
                    <tbody align="center">
            <tr>
                <td><?php echo $value['item_proveedor'];?></td>
                <td><?php echo $value['item_id'];?></td>
                   <td><?php echo $value['item_marca'];?></td>
                <td><?php echo $value['item_modelo'];?></td>
                <td><?php echo $value['item_serie'];?></td>
                <td><?php echo $value['item_identificacion'];?></td>
                <td>$<?php echo $value['item_precioTotalCiclos'];?></td>
       


                       <td><a class="btn btn-danger" href="Carrito_2.php?action=delete&identificacion=<?php echo $value['item_identificacion'];?>">Quitar del carrito</a></td>
            </tr>
           <?php
           //METER CONTADOR
                 $var = $value['item_precioTotalCiclos'];
                 $valorToTal = floatval($var);
                 $total +=$valorToTal ;
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
                <tr>
                    <td colspan="4" style="color: red" align="center"><strong>No hay Producto Agregado!</strong></td>
                </tr>
            <?php

            }

            ?>

        </table>
        <?php  if(!empty($_SESSION['add_carro_servicio']))
            {  ?>
  <div class="form-row">
              <div class="form-group col-md-6">
       <div  id="paypal-button-container"></div>
   </div>

              <div class="form-group col-md-6">
    <a href="ptarjetas.php"><button type="button" class="btn btn-dark btn-lg btn-block" href="#"
                    >Transferencia</button></a>
                </div>
            </div>

    </center>
       <?php }  ?>


</div>
</div>
</div>
<div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-2);"></div>
</div>
</div>
</main>

<br>
<br>
<br>
    <footer class="border-top footer text-muted border-top-color" style="background-color: #ffffff
">

    
        <div class="container gly " style="max-width: 18rem; color:#0c62bf ">
            &copy; 2020   Palmertec - <a style="color:#0c62bf" href="/Home/Privacy">Privacy</a>
        </div>
    </footer>

    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
      paypal.Buttons({
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '<?php echo $total?>'
              }
            }]
          });
        },
          onApprove: function(data, actions) {
          return actions.order.capture().then(function(details) {
    if (details.status == 'COMPLETED') {
            window.location="../Controlador/#";
        }
          });
        }
      }).render('#paypal-button-container'); // Display payment options on your web page
    </script>
</body>
</html>

