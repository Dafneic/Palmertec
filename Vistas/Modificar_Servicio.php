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
    <title>Proveedores Palmertec</title>
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
         <input type="checkbox" id="btn-menu"/>
        <label class="icon-menu"for="btn-menu"></label>
        <nav class="menu">
            <ul>
                <li><a href="Panel_Administrador.php" style="font-weight: bold;">Inicio</a></li>
                            <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>



                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw"></form>


                        </li>

                
            </ul>
            </div>
        </nav>
    </header>

    <?php
        extract($_GET);
        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM servicio WHERE id_servicio=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $NombreR=$row[1];
               
            }



        ?>
   
    <div class="container">
        <main role="main" class="container">
            

    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Modificar_servicio.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Categoria</h4>
    <br><input type="hidden" class="form-control" name="id" id="id" value= "<?php echo $id ?>"  readonly="readonly"><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Nombre</h6></label>
                <input type="text" name="Nombre" class="form-control" id="Nombre" value="<?php echo $NombreR?>"  required>
              </div>
 <div class="form-group col-md-6">
                                   <select name="Categoria" id="Categoria" class="select-css" required>
                    <option value="0"> Seleccione un servicio</option>

                    <?php

      try {
       require("../Controlador/Conexion.php");
     

       $sql=("SELECT * FROM categoria");
  
        $query=mysqli_query($mysqli,$sql);
       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value=".$arreglo[0].">".$arreglo[1].
                "</option>";
        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
      

      ?>
</select>
          </div>  
      </div>
              <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Modificar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>

        </div>
        <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div><br>
        </div>

           
       
      

    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwB379Hfgla89bBQcqCWZdZfz5gHu1rtY9An_lYzuwoeQ0b_0gAfRafGyXxWE__B0fkTx9dzqmwkwofSLZFFuBK0XoLeGEKLCa9wCqSJs5ixi4WXaXHZarOiJoFQgNv-BAA" /></form>

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