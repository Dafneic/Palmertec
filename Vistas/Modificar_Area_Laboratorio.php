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
    <title>Proveedores-Palmertec</title>
    <link rel="stylesheet" href="../lib/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/site.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
        <link rel="stylesheet" href="../css/stylos.css" />
    <link rel="stylesheet" href="../lib/jquery-ui/jquery-ui.css" />
        <link rel="stylesheet" href="css/fontello/css/fontello.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
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
                  <li><a href="Proveedores.php" style="font-weight: bold;">Proveedores</a></li>
                        
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
        extract($_GET);
        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM area_laboratorio WHERE id_area_laboratorio=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $Laboratorio=$row[1];
                $Acreditacion=$row[2];
                $Categoria=$row[3];
                $Servicio=$row[4];
                $Subservicio=$row[5];
                $Instrumenro=$row[6];
                $Exactitud=$row[7];
                $AlcanceMi=$row[8];
                
           
            }



        ?>
   
    <div class="container">
        <main role="main" class="container">
            

    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Modificar_Area_Laboratorio.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Modificar área laboratorio</h4>
    <br><input type="hidden" class="form-control" name="id" id="id" value= "<?php echo $id ?>" readonly="readonly"><br>
     <div class="form-row">
            <div class="form-group col-md-3">
 <label>Laboratorio</label>
                                                 <select name="Laboratorio" id="Laboratorio" class="form-control" required>
                    <option value="1"> Seleccione su laboratorio</option>

                    <?php

      try {
       require("../Controlador/Conexion.php");
     

       $sql=("SELECT * FROM proveedor");
  
        $query=mysqli_query($mysqli,$sql);
       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value='$arreglo[1]'>".$arreglo[1].
                "</option>";
        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
      

      ?>
</select>
            </div>
            <div class="form-group col-md-3">
               <label for="name1">Acreditación</label>
    <select id="Acreditacion" class="form-control" name="Acreditacion" required>
      </select>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-3">
              <label>Tipo de servicio</label>
               <select name="Categoria" id="Categoria" class="form-control" required>
                    <option value="1"> Seleccione el tipo de servicio</option>

                    <?php

      try {
       require("../Controlador/Conexion.php");
     

       $sql=("SELECT * FROM categoria");
  
        $query=mysqli_query($mysqli,$sql);
       

       while($arreglo=mysqli_fetch_array($query)){
          echo  "<option value='$arreglo[0]'>".$arreglo[1].
                "</option>";
        }
      
        echo "</select>";
      } catch (mysqli\Driver\Exception\Exception $e) {
        die("Error: ".$e);
      }
      

      ?>
</select>
            </div>
            <div class="form-group">
    <label for="name1">Servicio</label>
    <select id="Servicio" class="form-control" name="Servicio" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>

  <div class="form-group">
    <label for="name1">Sub servicio</label>
    <select id="Subservicio" class="form-control" name="Subservicio" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail3" style="color:#808080"><h6>Exactitud</h6></label>
                <input type="text" name="Exactitud" class="form-control" id="Exactitud" placeholder="" required>
            </div>
            <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Alcance Mínimo</h6></label>
                <input type="text" name="AlcanceMi" class="form-control" id="AlcanceMi" placeholder="">
            </div>
             <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Alcance Máximo</h6></label>
                <input type="text" name="AlcanceMa" class="form-control" id="AlcanceMa" placeholder="">
            </div>

        </div>
 

               
        </div>
    </div>
       
      
        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input name="btnaccion" value="Modificar Ahora!" type="submit" class="btn btn-primary" />
                    
                </h3>
            </div>
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
<script type="text/javascript">
  $(document).ready(function(){
    $("#Categoria").change(function(){
      $.get("../Controlador/subservicio.php","Categoria="+$("#Categoria").val(), function(data){
        $("#Servicio").html(data);
        console.log(data);
      });
    });

    $("#Servicio").change(function(){
      $.get("../Controlador/subservicios.php","Servicio="+$("#Servicio").val(), function(data){
        $("#Subservicio").html(data);
        console.log(data);
      });
    });
  });
</script>
</body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $('#Laboratorio').val(1);
    recargarLista();

    $('#Laboratorio').change(function(){
      recargarLista();
    });
  })
</script>
<script type="text/javascript">
  function recargarLista(){
    $.ajax({
      type:"POST",
      url:"../Controlador/datos.php",
      data:"nombre=" + $('#Laboratorio').val(),
      success:function(r){
        $('#Acreditacion').html(r);
      }
    });
  }
</script>


