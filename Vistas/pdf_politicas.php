<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1 or 0) {
  header("Location:../Index.php");
}?>


<?php
include_once '../Controlador/config.inc.php';
if (isset($_POST['subir'])) {
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
              $laboratorio= $_POST['laboratorio'];
            $titulo= $_POST['titulo'];
            $descri= $_POST['Magnitud'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO politicas(laboratorio,titulo,magnitud,tamanio,tipo,nombre_archivo) VALUES('$laboratorio','$titulo','$descri','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo ' <script language="javascript">alert("Reporte registrado con éxito");</script> ';
                echo "<script>location.href='Politicas.php'</script>";   
            }
        } else {
                echo ' <script language="javascript">alert("A ocurrido un error contacte a soporte");</script> ';
                echo "<script>location.href='Politicas.php'</script>";   
        }
    }
}
?>
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
<li><a href="../Controlador/logut.php" style="font-weight: bold;">Cerrar sesión</a></li>                          

                        </li>

                
            </ul>
        </nav>
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
   
   
        <center> 
          <form method="post" class="bg-white  shadow p-5 rounded-lg" action="" enctype="multipart/form-data">
             <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Registro de reportes</h4>
        <div class="form-row">
            <div class="form-group col-md-12">
              
                <table>
                     <tr>
                       
                        <td><input class="form-control" type="hidden" name="laboratorio" value= "<?php echo $NombreR ?>" ></td>
                    </tr>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input class="form-control" type="text" name="titulo" placeholder="ingrese el titulo" minlength="3" required=""></td>
                    </tr>
                    <tr>
                        <td><label>Seleccione una magnitud</label></td>
                        <td> 
  <br>
                                                 <select name="Magnitud" id="Magnitud" class="select-css" required>
                    <option value="1"> Seleccione una magnitud</option>

                    <?php

      try {
       require("../Controlador/Conexion.php");
     

       $sql=("SELECT * FROM servicio");
  
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
</select></td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><input type="file" name="archivo" accept="application/pdf"></td>
                    <tr>
                        </tr><center><td><input type="submit" value="subir" class="btn btn-primary" name="subir"></td></center>
                    
                    </tr>
                </table>
            <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>
    </div></div></center>
            

            </form>  

    

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
