
<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1 or 0) {
  header("Location:../Index.php");
}
?>
 <?php 
$id=$_SESSION['id_proveedor'];

        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM proveedor WHERE id_proveedor=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $NombreR=$row[1];
               
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
</head> <?php 
   require("../Controlador/Conexion.php");

$sql = "SELECT COUNT(*)  FROM reportes_rechazados where laboratorio= '$NombreR'";
   $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $Total=$row[0];
               
            }

     ?>
     <?php 
   require("../Controlador/Conexion.php");

$sql = "SELECT COUNT(*)  FROM pedidos where proveedor= '$NombreR' and pago='realizado'";
   $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $Totala=$row[0];
               
            }

     ?>
<body>
   <header style="background-color:#f1eeee ">
        <nav class="navbar  navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                               <div align="left">
                    <a class="nav-link text-primary" href="Panel_Administrador.php"> <img style="max-width: 100%" style="height: auto;" src="../img/palmertec.png"></a>

                </div>
                <center><h4 style="color:#0c62bf">Bienvenido <?php echo$_SESSION['nombre_contacto']; ?></h4></center>
        <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu" >
            <ul>


                <li ><a href="Panel_Proveedor.php" style="font-weight: bold;">Inicio</a></li>
                            <li>
                              
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

        <img src="../img/calibracion-metrologia-volumen-pipeta.jpg" style="max-width: 100%" style="height: auto;>
</center>
    </div>

        <div class="btn-group-vertical"> 

               <br>
    <br>
             <div class="form-row">
            <div class="form-group col-md-4">
                <a href="Eventos.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"> Calendario</button></a>
            </div>
            <div class="form-group col-md-4">
     <a href="Politicas.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#">Politicas</button></a>

                
            </div>
             <div class="form-group col-md-4">
      
                   <a href="Personald.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"> Personal disponible</button></a>
               
            </div>

        </div>
         <div class="form-row">
              <div class="form-group col-md-4">
         

           
                   <a href="Agenda.php " style="color :white"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"> Agenda  <a style="color:yellow" ><?php if ($Totala == 0) { }else{ echo $Totala; }  ?> </a></button></a>
      
          
            </div>
            <div class="form-group col-md-4">
        
                   <a href="lista.php" style="color :white"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"> Reportes pdf <a style="color:red" ><?php if ($Total == 0) { }else{ echo $Total; }  ?> </a></button></a>
                
            </div>
             <div class="form-group col-md-4">

          
                   <a href="servicios_realizados.php"><button type="button" class="btn btn-primary btn-lg btn-block" href="#"> Servicios realizados</button></a>
               
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

        
        <div class="container gly " style="max-width: 18rem; color:#0c62bf ">
            © 2020   Palmertec - <a style="color:#0c62bf" href="/Home/Privacy">Privacy</a>
        </div>
    </footer>
    <script src="/lib/jquery/dist/jquery.js"></script>
    <script src="/lib/bootstrap/dist/js/bootstrap.js"></script>
    <script src="/js/site.js?v=xLg3OBNLN5axpvxHCX-BMlgT_JPLXBVRSmlvwHdncrI"></script>
    <script src="https://kit.fontawesome.com/37fd38107f.js" crossorigin="anonymous"></script>

    


</body></html>