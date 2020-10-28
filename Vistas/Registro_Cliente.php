<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesi&#xF3;n-Palmertec</title>
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
                    <a class="nav-link text-primary" href="Panel_Administrador.php"> <img style="max-width: 100%" style="height: auto;" src="../img/palmertec.png"></a>

                </div>
        <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu" >
            <ul>


                <li ><a href="../Index.php" style="font-weight: bold;">Inicio</a></li>
                <li ><a href="Seleccion_Registro.php" style="font-weight: bold;">Registro</a></li>
                <li ><a href="Login.php" style="font-weight: bold;">Iniciar Sesion</a></li>



                          </form>

                        </li>

                
            </ul>
        </nav>
    </header>
             

    <div class="container">
         <main role="main" class="container">
            
    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Registro_Cliente.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Cliente</h4>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Nombre, Razón Social</h6></label>
                <input type="text" name="RazonSocial" class="form-control" id="RazonSocial" placeholder="" required="" maxlength="30" minlength="3">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>RFC</h6></label>
                <input type="text" name="RFC" class="form-control" id="RFC" placeholder="" minlength="10" maxlength="13" required title="Ingresa un RFC correcto" >
                <!-- pattern="/^[A-ZÑ&]{3,4}\d{6}(?:[A-Z\d]{3})?$/" -->
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Giro</h6></label>
                <input type="text" name="Giro" class="form-control" id="Giro" placeholder="" required="" maxlength="30" minlength="3">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Nombre Contacto</h6></label>
                <input type="text" name="Nombre" class="form-control" id="Nombre" placeholder="" required="" maxlength="40" minlength="3">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail3" style="color:#808080"><h6>Domicilio</h6></label>
            <input type="text" name="Domicilio" class="form-control" id="Domicilio" placeholder="" required="" maxlength="60" minlength="10">
        </div>
<div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Teléfono</h6></label>
                <input type="tel" name="Telefono" class="form-control" id="Telefono" placeholder="" pattern="[0-9]{10}" required="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Móvil</h6></label>
                <input type="tel" name="Movil" class="form-control" id="Movil" placeholder="" pattern="[0-9]{10}" required>
            </div>
        </div>
               <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" style="color:#808080"><h6>Correo</h6></label>
                <input type="email" name="Correo" class="form-control" id="Correo" placeholder="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" required>
            </div>
              </div>
              <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Contraseña</h6></label>
                <input type="password" name="Contraseña" class="form-control" id="Contraseña" placeholder="" pattern="[A-Za-z0-9@#$%]{8}"  title="La contraseña debe tener al menos 8 dígitos. Un número, una mayúscula, una minúscula y un carácter especial" required>
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Confirmar Contraseña</h6></label>
                <input type="password" name="CContraseña" class="form-control" id="CContraseña" placeholder="" required>
        </div>
    </div>
       
      
        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Registrar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>
        </div><div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div><br>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwB379Hfgla89bBQcqCWZdZfz5gHu1rtY9An_lYzuwoeQ0b_0gAfRafGyXxWE__B0fkTx9dzqmwkwofSLZFFuBK0XoLeGEKLCa9wCqSJs5ixi4WXaXHZarOiJoFQgNv-BAA" /></form>

        </main>
    </div>



  <footer class="border-top footer text-muted border-top-color" style="background-color: #ffffff
">

        
        <div class="container gly " style="max-width: 18rem; color:#0c62bf ">
            © 2020   Palmertec - <a style="color:#0c62bf" href="/Home/Privacy">Privacy</a>
        </div>
    </footer>
    <script src="/lib/jquery/dist/jquery.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/js/site.js?v=xLg3OBNLN5axpvxHCX-BMlgT_JPLXBVRSmlvwHdncrI"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>

    


</body></html>