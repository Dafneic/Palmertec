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
                <li><a href="Panel_Cliente.php" style="font-weight: bold;">Inicio</a></li>
                     <li><a href="Carrito.php" style="font-weight: bold;">Carrito</a></li>
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
    <div class="row text-center pt-2 pb-2">
        
    
    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Registro_Area.php">

         <div class=""><center>
                    <div class=""><img src="images/calibracion.jpg" height="130" width="130"></div>
                    <h4 class="title">Calibración</h4>
                </div>
          <center><h3>¿Qué tipo de calibración requieres?</h3></center>  
             <input type="hidden" name="tipo" value="<?php echo $_GET["tipo"] ?>">

       <div class="form-row">
        <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=10&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/temperatura.jpg" height="95" width="65"></div>
                    <h5 class="title">Temperatura</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-6 text-center" align="">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=15&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/masa.jpg" height="95" width="80"></div>
                    <h5 class="title">Masa</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=14&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/presion.jpg" height="95" width="70"></div>
                    <h5 class="title">Presión</h5>
                </div>
            </a><br>
        </div>
                
      
                <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=17&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/volumen.jpg" height="85" width="70"></div>
                    <h5 class="title">Volumen</h5>
                </div>
            </a>
        </div>
                <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=18&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/humedad.jpg" height="85" width="70"></div>
                    <h5 class="title">Humedad</h5>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=19&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/optica.jpg" height="80" width="130"></div>
                    <h5 class="title">Óptica</h5>
                </div>
            </a><br>
        </div>

  
                <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=20&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/flujo.jpg" height="80" width="80"></div>
                    <h5 class="title">Flujo</h5>
                </div>
            </a>
        </div>
                <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=21&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/dimensional.jpg" height="80" width="130"></div>
                    <h5 class="title">Dimensional</h5>
                </div>
            </a>
        </div>
         <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=22&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/tiempo.jpg" height="80" width="75"></div>
                    <h5 class="title">Tiempo</h5>
                </div>
            </a><br>
        </div>
         <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=23&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/electrica.jpg" height="80" width="80"></div>
                    <h5 class="title">Eléctrica</h5>
                </div>
            </a>
        </div>
         <div class="col-md-4 col-6 text-center">
            <a class="undecorated-text" href="Seleccion_Instrumento.php?id=24&tipo=<?php echo $_GET["tipo"] ?>">
                <div class="grow">
                    <div class=""><img src="images/fuerza.jpg" height="80" width="90"></div>
                    <h5 class="title">Fuerza</h5>
                </div>
            </a>
        </div>

    </div>

  <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>
         

</div>


       </form>

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
    <script src="/lib/jquery/dist/jquery.js"></script>
    <script src="/lib/jquery/dist/jquery.min.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/js/site.js?v=xLg3OBNLN5axpvxHCX-BMlgT_JPLXBVRSmlvwHdncrI"></script>
    <script src="/lib/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>
    
    
</body>
</html>
