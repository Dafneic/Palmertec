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
   
    <div class="container">
        <main role="main" class="container">
            

    <form method="post" class="bg-white  shadow p-5 rounded-lg" action="../Controlador/Modificar_Proveedor.php">

        <img src="../img/palmertec.png" class="img-fluid mx-auto d-block pb-5" alt="Palmertec">
        <h4 class="pb-3" style="color:#0c62bf">Proveedor</h4>
    <br><input type="hidden" class="form-control" name="id" id="id" value= "<?php echo $id ?>" readonly="readonly"><br>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Nombre o razon social</h6></label>
                <input type="text" name="RazonSocial" class="form-control" id="RazonSocial" value="<?php echo $NombreR?>" required maxlength="30" minlength="3" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>RFC</h6></label>
                <input type="text" name="RFC" class="form-control" id="RFC" value="<?php echo $RFC?>" minlength="10" maxlength="13" required title="Ingresa un RFC correcto" >
            </div>
        </div>

          <div class="form-row">
             <div class="form-group col-md-6">
                  <label for="inputEmail3" style="color:#808080"><h6>Acreditación</h6></label>
                  <select name="Acreditacion" id="Acreditacion" class="select-css" required>
                    <option value="<?php echo $Acreditacion?>"><?php echo $Acreditacion?></option>
<option value="EMA">EMA</option>
<option value="Perry johnson">Perry johnson</option>
<option value="Trazabilidad">Trazabilidad</option>

     
</select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Nombre</h6></label>
                <input type="text" name="Nombre" class="form-control" id="Nombre" value="<?php echo $Nombre?>" required maxlength="30" minlength="3" >
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Domicilio</h6></label>
                <input type="text" name="Domicilio" class="form-control" id="Domicilio" value="<?php echo $Domicilio?>" required maxlength="60" minlength="10" >
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Código postal</h6></label>
                <input type="text" name="Codigop" class="form-control" id="Codigop" value="<?php echo $Codigop?>" required pattern="[0-9]{5}"  >
            </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Teléfono</h6></label>
                <input type="tel" name="Telefono" class="form-control" id="Telefono" value="<?php echo $Telefono?>" pattern="[0-9]{10}" title="Solo debes ingresar números">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Móvil</h6></label>
                <input type="tel" name="Movil" class="form-control" id="Movil" value="<?php echo $Movil?>" required pattern="[0-9]{10}" title="Solo debes ingresar números">
            </div>
        </div>

               <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputEmail3" style="color:#808080"><h6>Correo</h6></label>
                <input type="email" name="Correo" class="form-control" id="Correo" value="<?php echo $Correo?>" required  pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Debes ingresar un correo electronico, ejemplo: palmertec@gmail.com">
            </div>
              </div>
              <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Contraseña</h6></label>
                <input type="password" name="Contraseña" class="form-control" id="Contraseña" value="<?php echo $Contraseña?>" required pattern="[A-Za-z0-9@#$%]{8}"  title="La contraseña debe tener al menos 8 dígitos. Un número, una mayúscula, una minúscula y un carácter especial" >
                </div>
                <div class="form-group col-md-6">
                <label for="inputEmail3" style="color:#808080"><h6>Confirmar Contraseña</h6></label>
                <input type="password" name="CContraseña" class="form-control" id="CContraseña" value="<?php echo $Contraseña?>" required>
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