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


    <script> 
function sumar() { 
var n1 = parseInt(document.MyForm.precio.value); 
var n2 = parseInt(document.MyForm.puntoadicional.value); 
document.MyForm.total.value=n1+n2;
var n3 = parseInt(document.MyForm.total.value); 
var n4 = parseInt(document.MyForm.serviciourgente.value); 
var n5 = parseInt(document.MyForm.costoadicional.value);  
document.MyForm.totalapagar.value=n3+n4+n5;
var n7 = parseInt(document.MyForm.porcentaje.value);
var n8 = parseInt(document.MyForm.totalapagar.value);
var n9 = parseInt(document.MyForm.recoleccion.value);
document.MyForm.totalpalmertec.value=n3+(n3*n7/100)+n9;
document.MyForm.totalpalmertecurgente.value=n8+(n8*n7/100)+n9;
} 
</script>  


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
                <li><a href="Areas_Laboratorio_2.php" style="font-weight: bold;">Cotizaciónes</a></li>
                        
                        <li class="menu">
                               <li ><a href="../Controlador/Logut.php" style="font-weight: bold;">Cerrar sesión</a></li>
                            <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwD7X6xdOAO3v2Ohmo2SCoXj4UAQnuL1DFq1YPvp2G2ofEL9-NUt33XQW-auyf7_E4c45ltwOCYLIomwhPCf71_2L3gLIWq4g72qRiT6ZE9h5mRmAluZhZmumZ-ke3lco9K0QqHSsR0H9p22XejQv92JJu1AjtIisHE6t8roYWzsHw">
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </header>
   
    <div class="container">
        <main role="main" class="container">
            <?php
        extract($_GET);
        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM proveedor WHERE id_proveedor=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
                $id=$row[0];
                $NombreR=$row[1];
                $RFC=$row[2];
                $Acreditacion=$row[3];
                $Nombre=$row[4];
                $Domicilio=$row[5];
                $Codigop=$row[6];
                $Telefono=$row[7];
                $Movil=$row[8];
                 $Correo=$row[9];
                $Contraseña=$row[10];
            }



        ?>
     

    <form name="MyForm" method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Registro_Area_Laboratorio_2.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Servicios</h4>

        <div class="form-row">
            <div class="form-group col-md-3">
 <label>Laboratorio</label>
                                                     
                <input type="text" name="Laboratorios" class="form-control" id="Laboratorios" value="<?php echo $NombreR?>" readonly required>
            </div>
            <div class="form-group col-md-3">
               <label for="name1">Acreditación</label>
              
      <input type="text" name="Acreditacion" class="form-control" id="Acreditacion" value="<?php echo $Acreditacion?>" readonly
       required>
            </div>
        </div>
         <div class="form-row">
            <div class="form-group col-md-3">
              <label>Tipo</label>
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
    <label for="name1">Equipo</label>
    <select id="Servicio" class="form-control" name="Servicio" required>
      <option value="">-- SELECCIONE --</option>
   </select>
  </div>

    

    <div class="form-group">
    <label for="">Porcentaje palmertec</label>
    <select id="porcentaje" class="form-control" name="porcentaje" required>
      <option value="0">-- SELECCIONE --</option>
         <option value="10"> 10% </option>
           <option value="15"> 15% </option>
  <option value="20"> 20% </option> 
    <option value="25"> 25% </option>
      </select>
  </div>
    <div class="form-group">
    <label for="">Servicio de recoleccion</label>
    <select id="recoleccion" class="form-control" name="recoleccion" required>
      <option value="0">Sin Costo</option>
         <option value="100"> $100 </option>
           <option value="200"> $200 </option>
  <option value="300"> $300 </option> 
    <option value="400"> $400 </option>
           <option value="500"> $500 </option>
           <option value="600"> $600 </option>
  <option value="700"> $700 </option> 
    <option value="800"> $800 </option>
     <option value="900"> $900 </option> 
    <option value="1000"> $1000 </option>
      </select>
  </div>
        </div>


    <div class="row">
      <div class="col-lg-12">
        <button class="btn btn-primary" id="agregarEtapa">Agregar</button>
      </div>
    </div>
    <br>
    <div class="row" id="aquiSeInsertaElContenidoDinamico">
    </div>
    <br>



        <div class="form-row">
            <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Alcance Mínimo</h6></label>
                <input type="text" name="AlcanceMi" class="form-control" id="AlcanceMi" placeholder="" required="" pattern="[0-9]{1,10}" onkeypress="return permite(event, 'num')">
            </div>
             <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Alcance Máximo</h6></label>
                <input type="text" name="AlcanceMa" class="form-control" id="AlcanceMa" placeholder="" required="" pattern="[0-9]{1,10}" onkeypress="return permite(event, 'num')" >
            </div>

        </div>
         <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail3" style="color:#808080"><h6>Precio</h6></label>
                <input type="text" name="precio" class="form-control" id="precio" placeholder=""  readonly=""
               onkeypress="return permite(event, 'num')" >
            </div>
            <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Punto adicional</h6></label>
                <input type="text" name="puntoadicional" class="form-control" id="puntoadicional" placeholder="" required="" pattern="[0-9]{1,10}" onkeypress="return permite(event, 'num')" >
            </div>
             <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Total Servicio normal</h6></label>
                <input type="text" name="total" class="form-control" id="total" placeholder="" readonly="">

                <label for="inputEmail3" style="color:#808080"><h6>Total servicio normal con palmertec</h6></label>
                <input type="text" name="totalpalmertec" class="form-control" id="totalpalmertec" placeholder="" readonly="">
            </div>

        </div>
         <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputEmail3" style="color:#808080"><h6>Servicio urgente</h6></label>
                <input type="text" name="serviciourgente" class="form-control" id="serviciourgente" placeholder="" pattern="[0-9]{1,10}" required onkeypress="return permite(event, 'num')">
            </div>
            <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Costo adicional</h6></label>
                <input type="text" name="costoadicional" class="form-control" id="costoadicional" placeholder="" pattern="[0-9]{1,10}" required="" onkeypress="return permite(event, 'num')">
            </div>
             <div class="form-group col-md-4">
 
                <label for="inputEmail3" style="color:#808080"><h6>Total servicio urgente</h6></label>
                <input type="text" name="totalapagar" class="form-control" id="totalapagar" readonly="" placeholder="">
                  <label for="inputEmail3" style="color:#808080"><h6>Total servicio urgente con palmertec</h6></label>
                <input type="text" name="totalpalmertecurgente" class="form-control" id="totalpalmertecurgente" placeholder="" readonly="">
            </div>

        </div>
 

        <div class="form-group">
            <div class="text-center">
                <h3>
                    <input type="button" class="btn btn-primary" value="Ver cotización" onclick="sumar()"> 
      
                    <input name="btnaccion" value="Registrar Ahora!" type="submit" class="btn btn-primary" onclick="sumar()"/>
                    
                </h3>
            </div>

        </div>
              <div class="pull-right"><input class="btn btn-secondary" type="button" value="Atrás" onClick="history.go(-1);"></div><br> 
        </div>
    </div>
 
      

    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8Btx0nQ5bF1Ckd6OFxA8cwB379Hfgla89bBQcqCWZdZfz5gHu1rtY9An_lYzuwoeQ0b_0gAfRafGyXxWE__B0fkTx9dzqmwkwofSLZFFuBK0XoLeGEKLCa9wCqSJs5ixi4WXaXHZarOiJoFQgNv-BAA" /> </form>

        </main>
    </div>
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
    <script src="../js/subservicios.js"></script>
    
    <script type="text/javascript">
      var subservicioInfo = 
  $(document).ready(function(){
    $("#Categoria").change(function(){
      $.get("../Controlador/subservicio.php","Categoria="+$("#Categoria").val(), function(data){
        $("#Servicio").html(data);
        console.log(data);
      });
    });
    /*
    $("#Servicio").change(function(){
      $.get("../Controlador/subservicio2.php","Servicio="+$("#Servicio").val(), function(dataJson){
        for (var i = 0; i < dataJson.length; i++) {
          $('#Subservicio').append('<option value="' + dataJson[i].id + '">' + dataJson[i].nombre + '</option>');
        }
       // $("#Subservicio").html(data);
        //console.log(dataJson);
      });

    });
    */
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


  function permite(elEvento, permitidos) {
   
    var numeros = "-0123456789";
    var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    var numeros_caracteres = numeros + caracteres;
    var teclas_especiales = [8, 37, 39, 46];


    switch (permitidos) {
        case 'num':
            permitidos = numeros;
            break;
        case 'car':
            permitidos = caracteres;
            break;
        case 'num_car':
            permitidos = numeros_caracteres;
            break;

    }

   
    var evento = elEvento || window.event;
    var codigoCaracter = evento.charCode || evento.keyCode;
    var caracter = String.fromCharCode(codigoCaracter);

    var tecla_especial = false;
    for (var i in teclas_especiales) {
        if (codigoCaracter == teclas_especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

  
    return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
</script>

<script type="text/javascript">
/*
  $('#create_button').click(function() {
  var html = $('.child_div:first').parent().html();
  $(html).insertBefore(this);
});

$(document).on("click", ".deleteButton", function() {
  $(this).closest('.child_div').remove();
});
*/
</script>


