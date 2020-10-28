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
                <li><a href="Panel_Cliente.php" style="font-weight: bold;">Inicio</a></li>
               <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>


                 <li ><a  href="https://www.facebook.com/PalmerTecMx"><i class="fab fa-facebook-f fa-2x fa-lg" ></i></a></li>
                
            </ul>
        </nav>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="container">
            
 
<div class="container">

    <div class="row text-center pt-2 pb-6">
        
    <form method="post" class="bg-white  shadow p-5 rounded-1g" action="../Vistas/Datos_Equipo.php">

         <div class="">
            
                    <div class=""><img src="images/servicio.jpg" height="130" width="130"></div>
                    <h4 class="title">Servicio</h4>
                </div>

 
          <center><h3>¿Qué tipo de equipo requieres?</h3></center>  
        <input type="hidden" name="tipo" value="<?php echo $_GET["tipo"] ?>">
      

        <select name="equipo" id="equipo" class="select-css" required>
                

                    <?php
                $id=  $_GET['id']; 

      try {
       require("../Controlador/Conexion.php");
     

       $sql=("SELECT * FROM servicio where categoria_id ='1'");
  
        $query=mysqli_query($mysqli,$sql);

       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value= '".$arreglo[1]."'>".$arreglo[1].
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
                    <input name="btnaccion" value="Cotizar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>
        </div></center>

<div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>



       </form>
</div>

    </div>
</div><br><br><br><br><br>

        </main>
    </div>

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
