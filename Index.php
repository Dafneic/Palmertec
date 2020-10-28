<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de sesi&#xF3;n-Palmertec</title>
    <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/site.css" />
    <link rel="stylesheet" href="lib/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <!-- VALIDACION-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <header style="background-color:#f1eeee ">
        <nav class="navbar  navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <div align="left">
                    <img src="img/palmertec.png" />
                </div>
        <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu">
            <ul>
                <li><a href="Index.php" style="font-weight: bold;">Inicio</a></li>
                <li><a href="Vistas/Registro_Cliente.php" style="font-weight: bold;">Registro</a></li>
                <li><a href="Index.php" style="font-weight: bold;">Iniciar Sesion</a></li>
                 <li ><a  href="https://www.facebook.com/PalmerTecMx"><i class="fab fa-facebook-f fa-2x fa-lg" ></i></a></li>
                
            </ul>
        </nav>
            </div>
        </nav>
    </header>
   
    <div class="container">
        <main role="main" class="container">
            

    <div class= "pb-5">
    <div class="row mt-3 mb-3">
        <div class="col-12 col-md-5 mx-auto">
            <form method="post" class="bg-white  shadow p-5 rounded-lg"  action="Controlador/Validacion.php">
                <img src="img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
                <h2 class="pb-3">Iniciar sesión</h2>
                <div class="form-group">
                    <label for="emailInput">Correo Electrónico</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-light"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        </div>
                        <input type="email" name="Correo" class="form-control" id="Correo" aria-describedby="emailHelp" required>
                        <span class="help-block"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="passwordInput">Contraseña</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-light"><i class="fa fa-key" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" class="form-control" id="Contraseña" name="Contraseña" required>
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" id="btnvalidar" class="btn btn-primary btn-lg">Entrar</button>
                </div>
                <div class="text-center pt-3">
                    <a class="text-primary" href="/Login/ForgotPassword">¿Olvidaste tu contraseña?</a>
                </div>
            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwCxXrwpb4p61vHx0jGc5AK1nVq1jt0yipciXOSoHYNpr0ovhj0Ylc_vt0asIeh4uSiTLB8LoVn16DP8st8mXmdAW9ksZpSqu8l7mfNTOhA7rOMdxRNXrT21Rzg--YBk83M" /></form>
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
                    5521955763
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
    <script src="js/validacion.js"></script>
    <script srce="js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>
    
    
</body>
</html>