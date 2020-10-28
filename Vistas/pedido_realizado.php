
<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==2 or 0) {
  header("Location:../Index.php");
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
</head>
<body>
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
            </ul>
        </nav>
            </div>
        </nav>
    </header>
   
    <div class="container">
        <main role="main" class="container">
            

<div class="container">
    <div class="row text-center pt-5 pb-5">
        <div class="col-12">
            <h3 class="title">Pedido realizado con exito</h3>
           
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-12 text-center">
            <a class="undecorated-text" href="#">
                <div class="grow">
                    <div class=""><img src="../img/exitoso.png" height="130" width="130"></div>
         
                </div>
            </a>
        </div>
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
                 <td><?php $ser = $value['item_servicio'];?></td>
       


                <?php number_format($value['item_cantidad'] * $value['item_precio'],2);?>
                       
           <?php
                    $total = $total + ($value['item_cantidad']  * $value['item_precio']);

                        require("../Controlador/Conexion.php");

        require("../Controlador/Conexion.php");
        $sql=("SELECT * FROM Politicas WHERE magnitud='$ser' and laboratorio='$prov'");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead style='color: blue' background='gray'>";
                      echo "<tr>";

            
            echo "<th>Titulo</th>";
         
          
               echo "<th>Acciones</th>";      
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody>";
              echo "<td>$arreglo[2]</td>";
 
            
             
         


       
echo "<td><a href='archivo_politicas_cliente.php?id=$arreglo[0]'>Ver Politica</a></td>";
            
          echo "</tr>";
        }

        echo "</table>";

        

                }
           ?>
          
             
         
        
          <?php

            }else{

                ?>
              
            <?php

            }

            ?>

        
            </a>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>        </main>
    </div>

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
    
    
</body>
</html>
