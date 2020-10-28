
<?php
session_start();
if (@!$_SESSION['nombre']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1) {
  header("Location:../Index.php");
}
?>
<html lang="es"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/site.css">
<link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-shims.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free-v4-font-face.min.css" media="all" rel="stylesheet"><link href="https://kit-free.fontawesome.com/releases/latest/css/free.min.css" media="all" rel="stylesheet">
    <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css"></head>
<body>
    <header style="background-color:#e21f1f" class="border">
        <nav class="navbar  navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <div align="left">
                    <a class="nav-link text-primary" href="Panel_Administrador.php"> <img src="../img/palmertec.png"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse float-right ">
                    <ul class="nav navbar-nav navbar-lineas dropdown-menu-lg-right">

                   
                         <li class="nav-item">
                            <a class="nav-link text-primary" href="Panel_Administrador.php"><h4 style="color:#0c62bf" >Inicio</h4></a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link text-primary" href="Registro_tipo_servicios.php"><h4 style="color:#0c62bf">Registrar servicio</h4></a>
                        </li>
                        
                        <li class="nav-item">
                            <form method="post" action="../Controlador/Logut.php">
                                <button type="submit" class="nav-link btn btn-link text-primary">
                                    <h4 style="color:#0c62bf">Cerrar sesión</h4>
                                </button>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw"></form>
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

      <?php

        require("../Controlador/Conexion.php");
        $sql=("SELECT * FROM servicio");
  
        $query=mysqli_query($mysqli,$sql);

        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead style='color: blue' background='gray'>";
                      echo "<tr>";

            echo "<th>Id</th>";
            echo "<th>Nombre del servicio</th>";
               echo "<th>Tipo</th>";
      
          echo "</tr>";
  echo "<tr>";

          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
            echo "<tbody>";
              echo "<td>$arreglo[0]</td>";
              echo "<td>$arreglo[1]</td>";
                echo "<td>$arreglo[2]</td>";
         

echo "<td><a href='modificar_proveedor.php?id=$arreglo[0]'><img src='../img/modificar.png' width='60' class='img-rounded'></td>";
echo "<td><a href='proveedores.php?id=$arreglo[0]&idborrar=2'><img src='../img/borrar_usuario.png' width='60' class='img-rounded'/></a></td>";
            

            
          echo "</tr>";
        }

        echo "</table>";

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM servicio WHERE id_tipo_servicio=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
            echo '<script>alert("Palmertec a eliminado al proveedor")</script> ';
            echo "<script>location.href='proveedores.php'</script>";
          }

      ?>
    </center>


</div>
</div>
</div>
</div>
</div>
</main>

<br>
<br>
<br>

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