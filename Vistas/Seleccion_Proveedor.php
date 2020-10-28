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
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
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
                <li><a href="Panel_cliente.php" style="font-weight: bold;">Inicio</a></li>
                 <li><a href="Carrito.php" style="font-weight: bold;">Carrito</a></li>
            <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                 <li ><a  href="https://www.facebook.com/PalmerTecMx"><i class="fab fa-facebook-f fa-2x fa-lg" ></i></a></li>
                
            </ul>
        </nav>
            </div>
        </nav>
    </header>               <script> 
function sumar() { 
var n1 = parseInt(document.MyForm.precio.value); 
var n2 = parseInt(document.MyForm.Cantidad.value); 
document.MyForm.total.value=n1*n2; 
} 
    </script> 
                    <?php
                

      try {
       require("../Controlador/Conexion.php");
     



       $sql=("SELECT * FROM agenda where class='event-warning'");
  
        $query=mysqli_query($mysqli,$sql);

       

       while($arreglo=mysqli_fetch_array($query)){
          echo   "        <CENTER>
<MARQUEE WIDTH=70% BGCOLOR='white'>
<FONT FACE=arial COLOR=red SIZE=5>
El laboratorio ".$arreglo[1]." no dara servicio del  ".$arreglo[8]." al  ".$arreglo[9]."
</FONT>
</MARQUEE>
</CENTER> ";

                
        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
      

      ?>

   
    <div class="container">
        <main role="main" class="container">


<div class="container">
    <div class="row text-center pt-2 pb-2">

    </div>
    <form name="MyForm" method="POST" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Validacion_Fecha.php">

         <div class=""><center>
                    <div class=""><img src="images/proveedor.jpg" height="130" width="130"></div>
                    <h4 class="title">Selección de Proveedor</h4>
                </div>
                  <input type="hidden" name="tipo" id="tipo" value="<?php echo $_POST["tipo"] ?>">
                   <input type="hidden" name="id_servicio" value="<?php echo $_POST["id_servicio"] ?>">
                            <input type="hidden" name="Instrumento" id="Instrumento" value="<?php echo $_POST['Instrumento'] ?>">
          <center><h3>Elige el proveedor adecuado</h3></center>  
   

       <div class="form-group">
          <div class="text-center">
  <br>
                                                 <select name="Proveedor" id="Proveedor" class="select-css" required>
                            
  
                    <?php
                   $tipo=$_POST['tipo'];
        if ($tipo=="normal") {

          try {
       require("../Controlador/Conexion.php");
     

    $Instrumento=$_POST['Instrumento'];

       $sql=("SELECT * FROM cotizaciones where instrumento='$Instrumento'");
  
        $query=mysqli_query($mysqli,$sql);

       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value='".$arreglo[1]."'>".$arreglo[1].
                "</option>";

        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
        }elseif ($tipo=="urgente") {
                try {
       require("../Controlador/Conexion.php");
     

    $Instrumento=$_POST['Instrumento'];

       $sql=("SELECT * FROM cotizaciones where instrumento='$Instrumento'");
  
        $query=mysqli_query($mysqli,$sql);

       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value='".$arreglo[1]."'>".$arreglo[1]. 
                "</option>";

        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
        }{


        }

     
      

      ?>
</select>
        <div class="form-group label-floating"  id="precio" name="precio"></div>

            </div>
    </div>
           <div class="form-group">
          <div class="text-center">
        
                <label for="inputEmail3" style="color:#808080"><h6>Cantidad</h6></label>
                <input type="text" name="Cantidad" class="form-control" id="Cantidad" placeholder="" pattern="[0-9]{1,10}" required>
            </div>

    </div>
      <div class="form-group">
          <div class="text-center">
        
              
                <input type="hidden" name="total" class="form-control" id="total" placeholder="" required>
            </div>

    </div>
      
        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Cotizar Ahora!" type="submit" onclick="sumar()" class="btn btn-primary" />
                  
      
                </h3>
            </div>
        </div></center>
        <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div>
    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwB379Hfgla89bBQcqCWZdZfz5gHu1rtY9An_lYzuwoeQ0b_0gAfRafGyXxWE__B0fkTx9dzqmwkwofSLZFFuBK0XoLeGEKLCa9wCqSJs5ixi4WXaXHZarOiJoFQgNv-BAA" /></form>

    </div><br>
</div><br>

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
<?php if ($tipo=="normal") {

echo"<script type='text/javascript'>
  $(document).ready(function(){
    $('#Proveedor').val(1);
    recargarLista();

    $('#Proveedor').change(function(){
      recargarLista();
    });
  })
</script>
<script type='text/javascript'>
  function recargarLista(){
    $.ajax({
      type:'POST',
      url:'../Controlador/datoss.php',
      data:{'nombres': $('#Proveedor').val() , 'tipos': $('#tipo').text(),'Instrumento': $('#Instrumento').val()},
      success:function(r){
        $('#precio').html(r);
      }
    });
  }
</script>";

}elseif ($tipo=="urgente") {
echo"<script type='text/javascript'>
  $(document).ready(function(){
    $('#Proveedor').val(1);
    recargarLista();

    $('#Proveedor').change(function(){
      recargarLista();
    });
  })
</script>
<script type='text/javascript'>
  function recargarLista(){
    $.ajax({
      type:'POST',
      url:'../Controlador/datosss.php',
      data:{'nombres': $('#Proveedor').val() , 'tipos': $('#tipo').text(),'Instrumento': $('#Instrumento').val()},
      success:function(r){
        $('#precio').html(r);
      }
    });
  }
</script>";
}  ?>
