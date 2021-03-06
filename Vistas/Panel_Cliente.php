
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
                              <li><a href="Reportes_cliente.php" style="font-weight: bold;">Reportes</a></li>
  <li><a href="servicios_realizados_c.php" style="font-weight: bold;">mis servicios realizados</a></li>
                               <li><a href="pedidos_cliente.php" style="font-weight: bold;">mis pedidos</a></li>
                           <li><a href="Carrito.php" style="font-weight: bold;">Carrito de calibraciones</a></li>
                           <li><a href="Carrito_2.php" style="font-weight: bold;">Carrito de servicios</a></li>
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
            <h3 class="title">Cotizador de Servicio</h3>
            <h2>¿Qué tipo de servicio o Calibración requieres?</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-12 text-center">
            <a class="undecorated-text" href="tipo.php">
                <div class="grow">
                    <div class=""><img src="images/servicio.jpg" height="130" width="130"></div>
                    <h4 class="title">Servicio</h4>
                </div>
            </a>
        </div>

                <div class="col-md-6 col-12 text-center">
            <a class="undecorated-text" href="tipo_c.php">
                <div class="grow">
                    <div class=""><img src="images/calibracion.jpg" height="130" width="130"></div>
                    <h4 class="title">Calibracion</h4><br><br><br>
                </div>
            </a>
        </div>

        
            </a>
        </div>
    </div>
</div>

        </main>
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
    <script src="../lib/jquery/dist/jquery.js"></script>
    <script src="../lib/jquery/dist/jquery.min.js"></script>
    <script src="../lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../js/site.js?v=xLg3OBNLN5axpvxHCX-BMlgT_JPLXBVRSmlvwHdncrI"></script>
    <script src="../lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>
    
    
</body>
</html>
