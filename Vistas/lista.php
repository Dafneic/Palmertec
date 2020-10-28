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
    <title>Administrador</title>
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/site.css" />
    <link rel="stylesheet" href="../lib/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
</head>
<body>
    <header style="background-color:#f1eeee ">
        <nav class="navbar  navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <div align="left">
                    <img src="../img/palmertec.png" />
                </div>
 <?php 
   require("../Controlador/Conexion.php");

$sql = "SELECT COUNT(*) FROM reportes_rechazados where laboratorio= '$NombreR'";
   $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $Total=$row[0];
               
            }

     ?>


         <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu">
            <ul>
                <li><a href="Panel_proveedor.php" style="font-weight: bold;">Inicio</a></li>
                  <li><a href="pdf.php" style="font-weight: bold;">Subir reporte</a></li>
                        <li><a href="reportes_aceptados_p.php" style="font-weight: bold;">Reportes aceptados
      <li><a href="reportes_rechazados_p.php" style="font-weight: bold;">Reportes rechazados </a></li>
                        </a><a style="color:red" ><?php if ($Total == 0) { }else{ echo $Total; }  ?> </a></li>
               
                 <li><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                           
                          
                            
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">

                        </li>

                
            </ul>
            </div>
        </nav>
    </header>
   <main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-2 p-2 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">

   

<center>

      <?php

        require("../Controlador/Conexion.php");
        $sql=("SELECT * FROM tbl_documentos WHERE laboratorio='$NombreR'");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead style='color: blue' background='gray'>";
                      echo "<tr>";

            
            echo "<th>Titulo</th>";
            echo "<th>Descripcion</th>"; 
             echo "<th>Cliente</th>"; 
              echo "<th>Nombre del archivo</th>";    
               echo "<th>Acciones</th>";      
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody>";
              echo "<td>$arreglo[2]</td>";
  echo "<td>$arreglo[3]</td>";  
    echo "<td>$arreglo[4]</td>";  
       echo "<td>$arreglo[7]</td>";          
             
         


       
echo "<td><a href='archivo.php?id=$arreglo[0]'>Ver archivo</a></td>";
            
          echo "</tr>";
        }

        echo "</table>";

        
          

      ?>
    </center>


</div>
</div>
</div>
</div>
</div><br>
<div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>
    
</main>

<br>
<br>
<br>

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










    