<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1) {
  header("Location:../Index.php");
}
?>
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
                <center><h4 style="color:#0c62bf">BIENVENIDO ADMINISTRADOR</h4></center>
        <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu" >
            <ul>


                <li ><a href="Panel_Administrador.php" style="font-weight: bold;">Inicio</a></li>
                            <li>
                                 <li ><a href="Herramientas.php" style="font-weight: bold;">Herramientas</a></li>
                            <li>
                           <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>



                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw"></form>

                        </li>

                
            </ul>
        </nav>
    </header>
   
    <div class="container">
         <main role="main" class="container">
            
<div class="row">
    <div class="col" align="left"> <center>

        <img src="../img/herramientas.gif" style="max-width: 100%" style="height: auto;>
</center>
    </div>

        <div class="btn-group-vertical"> 

               <br>
    <br>
             <div class="form-row">
            <div class="form-group col-md-4">
                 <a href="Categorias.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"
                    >Control de categorias</button></a>
            </div>
            <div class="form-group col-md-4">
     <a href="Tipos_servicio.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#">Control de magnitudes</button></a>

                
            </div>
             <div class="form-group col-md-4">
      
        <a href="Instrumentos.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#">Control de instrumentos</button></a>
               
            </div>

        </div>

        <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div><br>
         <div class="form-row">
              <div class="form-group col-md-4">
         

           
      
          
            </div>
            <div class="form-group col-md-4">
        
               
                
            </div>
             <div class="form-group col-md-4">
    
          
            </div>

        </div>
           <div class="form-row">
            <div class="form-group col-md-4">
       
           
            </div>
            <div class="form-group col-md-4">
        
         
       
                
            </div>
         

        </div>
               

     

            
          
        
<br>
<br>
<br>
        
       
       
        
            
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
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>
    
    
</body>
</html>