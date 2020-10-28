<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==2 or 0) {
  header("Location:../Index.php");
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
                       
        echo "<script>location.href='../Vistas/Carrito.php'</script>";
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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registro de usuario-Palmertec</title>
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
                    <li><a href="Carrito.php" style="font-weight: bold;">Carrito</a></li>
            <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                 <li ><a  href="https://www.facebook.com/PalmerTecMx"><i class="fab fa-facebook-f fa-2x fa-lg" ></i></a></li>
                <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">

            </ul>
        </nav>
            </div>
        </nav>
    </header>

        
</head>
<body>
    
   <main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-2 p-2 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">



     
     

        <table class='table table-striped table-sm table-responsive-sm'>
        <thead style='color: blue' background='gray' align="center">
                    <tr align="center">

            <th>Proveedor</th>
            <th>Cantidad</th>
            <th>Instrumento</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Alcance</th>
            <th>Puntos a calibrar</th>
            <th>Identificación</th>
            <th>Precio unitario</th>
              <th>Total</th>
          </tr>
  <tr>

          
  
          <tbody align="center">
            <td><?php echo $_POST["proveedor"] ?></td>
              <td><?php echo $_POST["cantidad"] ?></td>
          <td><?php echo $_POST["instrumento"] ?></td>
                   <td><?php echo $_POST["marca"] ?></td>
                         <td><?php echo $_POST["modelo"] ?></td>
                               <td><?php echo $_POST["alcance"] ?></td>
                                     <td><?php echo $_POST["puntosc"] ?></td>
                                           <td><?php echo $_POST["identificacion"] ?></td>
                                            <td><?php echo $_POST["precio"] ?></td>
                                              <td><?php echo $_POST["total"] ?></td>
                     <form method="post" action="datos_registrados.php?action=add&identificacion=<?php echo $_POST["identificacion"] ?>">

  <input type="hidden" name="id_servicio" id="id_servicio" value="<?php echo $_POST["id_servicio"] ?>">
          <input type="hidden" name="proveedor" id="proveedor" value="<?php echo $_POST["proveedor"] ?>">
            <input type="hidden" name="cantidad" id="cantidad" value="<?php echo $_POST["cantidad"] ?>">
  <input type="hidden" name="instrumento" id="instrumento" value="<?php echo $_POST["instrumento"] ?>">

      <input type="hidden" name="marca" id="marca" value="<?php echo $_POST["marca"] ?>">
            <input type="hidden" name="modelo" id="modelo" value="<?php echo $_POST["modelo"] ?>">
  <input type="hidden" name="alcance" id="alcance" value="<?php echo $_POST["alcance"] ?>">


      <input type="hidden" name="puntosc" id="puntosc" value="<?php echo $_POST["puntosc"] ?>">
            <input type="hidden" name="identificacion" id="identificacion" value="<?php echo $_POST["identificacion"] ?>">
  <input type="hidden" name="precio" id="precio" value="<?php echo $_POST["precio"] ?>">
    <input type="hidden" name="total" id="total" value="<?php echo $_POST["total"] ?>">



            
             <td>   <input type="submit" name="agregar" style="margin-top:5px;" class="btn btn-success" value="Agregar al carrito"/></td>
          
</form>

            
  
      </table>


    </center>


</div>
</div>
</div>
</div><br>
</div><div class="pull-right">
  <label>¿Deseas agregar otro servicio?</label><input class="btn btn-secondary" type="button" value="si" onClick="history.go(-7);"></div>
</main>


<br>

    <footer class="border-top footer text-muted border-top-color" style="background-color: #ffffff
">

        <div class="container gly " style="max-width: 26rem; ">

            <h4>
                <i class="fa fa-facebook-square fa-1g" style="color:#0c62bf"> palmertec</i>

                <i class="fa fa-whatsapp fa-1g" style="color:#0c62bf">
                    5620974817
                </i>
                <i class="fas fa-phone-alt  fa-1g" style="color:#0c62bf"> 6841-4743</i>
            </h4>
        </div>
        <div class="container gly " style="max-width: 18rem; color:#0c62bf ">
            &copy; 2020   Palmertec - <a style="color:#0c62bf" href="/Home/Privacy">Privacy</a>
        </div>
    </footer>
    <script src="/lib/jquery/dist/jquery.js"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/js/site.js?v=xLg3OBNLN5axpvxHCX-BMlgT_JPLXBVRSmlvwHdncrI"></script>
    <script src="/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>
    
    <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

