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
            

    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="datos_registrados.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">

   <input type="hidden" name="tipo" value="<?php echo $_GET["tipo"] ?>">
    <input type="hidden" name="id_servicio" value="<?php echo $_GET["id_servicio"] ?>">

  <!--<input type="hidden" name="instrumento" id="Instrumento" value=" <?php /* echo $_GET["Instrumento"]*/ ?>">  -->
    <input type="hidden" name="proveedor" value="<?php echo $_GET["Proveedor"] ?>">


    <input type="hidden" name="precio" value="<?php echo $_GET["precio"] ?>">

    <input type="hidden" name="cantidad" value="<?php echo $_GET["Cantidad"] ?>">

  <input type="hidden" name="total" value="<?php echo $_GET["total"] ?>">


        <h4 class="pb-3" style="color:#0c62bf">Datos del Instrumento</h4>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Instrumento</h6></label>
                <input type="text" name="instrumento" class="form-control" id="instrumento" value="<?php echo $_GET["instrumento"] ?>" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Marca</h6></label>
                <input type="text" name="marca" class="form-control" id="marca" placeholder="" minlength="3" maxlength="30" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Modelo</h6></label>
                <input type="text" name="modelo" class="form-control" id="modelo" placeholder="" minlength="1" maxlength="20" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Alcance</h6></label>
                <input type="text" name="alcance" class="form-control" id="alcance" placeholder="" minlength="1" maxlength="20" required>
            </div>
        </div>
           <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Puntos a Calibrar</h6></label>
                <input type="text" name="puntosc" class="form-control" id="puntosc" placeholder="" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Identificacion</h6></label>
                <input type="text" name="identificacion" class="form-control" id="identificacion" placeholder="" minlength="1" max="30" required>
            </div>
        </div>
       
      
        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Registrar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>
        </div>
        <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwB379Hfgla89bBQcqCWZdZfz5gHu1rtY9An_lYzuwoeQ0b_0gAfRafGyXxWE__B0fkTx9dzqmwkwofSLZFFuBK0XoLeGEKLCa9wCqSJs5ixi4WXaXHZarOiJoFQgNv-BAA" /></form>

        </main>
    </div><br><br>

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