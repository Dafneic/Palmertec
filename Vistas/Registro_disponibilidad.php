<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1 or 0) {
  header("Location:../Index.php");
}?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Proveedores-Palmertec</title>
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
                <li><a href="Panel_Proveedor.php" style="font-weight: bold;">Inicio</a></li>
                 <li><a href="Disponibilidad.php" style="font-weight: bold;">Mi horario de disponibilidad</a></li>
              
                        <li class="menu">
                               <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php 
$id=$_SESSION['id_proveedor'];

        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM proveedor WHERE id_proveedor=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $NombreR=$row[1];
               
            }


     ?>
   
    <div class="container">
        <main role="main" class="container">
            

    <form method="POST" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Registro_Disponibilidad.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Dias de trabajo</h4>
<input type="hidden" class="form-control" name="empresa" id="empresa" value= "<?php echo $NombreR ?>" readonly="readonly">
        <div class="form-row">
            <div class="form-group col-md-2">
                <label for="inputEmail3" style="color:#808080"><h6>Lunes</h6></label>
  <input type="checkbox" name="dia[]" value="Lunes" required="">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
            <div class="form-group col-md-2">
                                <label for="inputEmail3" style="color:#808080"><h6>Martes</h6></label>
  <input type="checkbox" name="dia[]" value="Martes">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
            <div class="form-group col-md-2">
                            <label for="inputEmail3" style="color:#808080"><h6>Miercoles</h6></label>
  <input type="checkbox" name="dia[]" value="Miercoles">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
            <div class="form-group col-md-2">
                            <label for="inputEmail3" style="color:#808080"><h6>Jueves</h6></label>
  <input type="checkbox" name="dia[]" value="Jueves">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
            <div class="form-group col-md-2">
                                <label for="inputEmail3" style="color:#808080"><h6>Viernes</h6></label>
  <input type="checkbox" name="dia[]" value="Viernes">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
             <div class="form-group col-md-2">
                                 <label for="inputEmail3" style="color:#808080"><h6>Sabado</h6></label>
  <input type="checkbox" name="dia[]" value="Sabado">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
             <div class="form-group col-md-2">
                             <label for="inputEmail3" style="color:#808080"><h6>Domingo</h6></label>
  <input type="checkbox" name="dia[]" value="Domingo">
<label for="inputEmail3" style="color:#808080">Hora de inicio</label>
               <input type="time" name="horai[]" value="">
               <label for="inputEmail3" style="color:#808080">Hora de termino</label>

               <input type="time" name="horaf[]" value="">
            </div>
        </div>
       
         
       
      
        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Registrar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>
        </div>
   </form>

        </main>
    </div>

    <footer class="border-top footer text-muted border-top-color" style="background-color: #ffffff
">

    
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