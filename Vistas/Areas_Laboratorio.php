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
    <title>Administrador</title>
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/site.css" />
    <link rel="stylesheet" href="../lib/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
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
                <li><a href="Panel_Administrador.php" style="font-weight: bold;">Inicio</a></li>
                <li><a href="Proveedores.php" style="font-weight: bold;">Registrar servicio</a></li>
                        
                        <li class="menu">
                               <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   <main role="main" class="container">
<div class="row">
<div class="col-12">
<div class="my-3 p-3 bg-white rounded box-shadow box-style">
<div id="home-box">
<div class="content">


<center>
<h4>Buscar Laboratorio <input type="text" class="" name="buscador" id="buscador" value="" ></h4>
                    
              
               <div class="form-group label-floating" id="bproveedor" name="bproveedor"></div>
      <?php

        require("../Controlador/Conexion.php");
        $sql=("SELECT * FROM cotizaciones");
  
        $query=mysqli_query($mysqli,$sql);


        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead style='color: blue' background='gray'>";
                      echo "<tr>";

 
            echo "<th>Laboratorio</th>";
            echo "<th>Acreditación</th>";
            echo "<th>Categoria</th>";
            echo "<th>Servicio</th>";
            echo "<th>Instrumento</th>";
             echo "<th>Exactitud</th>";
            echo "<th>Alcance Mínimo</th>";
            echo "<th>Alcance Máximo</th>";
                      echo "<th>Porcentaje palmertec</th>";
            echo "<th>Servicio de recolección</th>";
            echo "<th>Precio</th>";
            echo "<th>Punto adicional</th>";
     echo "<th>Total servicio normal</th>";
       echo "<th>Total servicio normal con palmertec</th>";
            echo "<th>Servicio urgente</th>";
            echo "<th>Costo adicional</th>";
             echo "<th>Total urgente</th>";
                echo "<th>Total urgente con palmertec</th>";
              echo "<th>Borrar</th>";
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody>";
              echo "<td>$arreglo[1]</td>";
              echo "<td>$arreglo[2]</td>";
                echo "<td>$arreglo[3]</td>";
              echo "<td>$arreglo[4]</td>";
                echo "<td>$arreglo[5]</td>";
              echo "<td>$arreglo[6]</td>";
                echo "<td>$arreglo[7]</td>";
              echo "<td>$arreglo[8]</td>";
                echo "<td>$arreglo[9]</td>"; 
                echo "<td>$arreglo[10]</td>";
              echo "<td>$arreglo[11]</td>";
                echo "<td>$arreglo[12]</td>";
                 echo "<td>$arreglo[13]</td>";
              echo "<td>$arreglo[14]</td>";
                echo "<td>$arreglo[15]</td>";
                 echo "<td>$arreglo[16]</td>";
                 echo "<td>$arreglo[17]</td>";
              echo "<td>$arreglo[18]</td>";
              
         

echo "<td><a href='Areas_Laboratorio.php?id=$arreglo[0]&idborrar=2'><img src='../img/borrar_area.png' width='60' class='img-rounded'/></a></td>";
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM cotizaciones WHERE id_cotizacion=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("Palmertec a eliminado la cotización")</script> ';
            echo "<script>location.href='Areas_Laboratorio.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
<div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div><br>
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
</html><script type="text/javascript">
  $(document).ready(function(){
    $('#buscador').val();
    recargarLista();

    $('#buscador').change(function(){
      recargarLista();
    });
  })
</script>
<script type="text/javascript">
  function recargarLista(){
    $.ajax({
      type:"POST",
      url:"../Controlador/Buscador_area.php",
      data:"nombres=" + $('#buscador').val(),
      success:function(r){
        $('#bproveedor').html(r);
      }
    });
  }
</script>

