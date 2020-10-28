<?php
session_start();
if (@!$_SESSION['nombre_contacto']) {
  header("Location:../Index.php");
}elseif ($_SESSION['rol']==1 or 0) {
  header("Location:../Index.php");
}?>    <?php 
$id=$_SESSION['id_proveedor'];

        require("../Controlador/Conexion.php");

        $sql="SELECT * FROM proveedor WHERE id_proveedor=$id";
        $ressql=mysqli_query($mysqli,$sql);
        while ($row=mysqli_fetch_row ($ressql)){
              
             $NombreR=$row[1];
               
            }


     ?><?php


    
    //incluimos nuestro archivo config
    include 'config.php'; 

    // Incluimos nuestro archivo de funciones
    include 'funciones.php';

    // Obtenemos el id del evento
    $id  = evaluar($_GET['id']);

    // y lo buscamos en la base de dato
    $bd  = $conexion->query("SELECT * FROM agenda WHERE id=$id and laboratorio='$NombreR'");

    // Obtenemos los datos
    $row = $bd->fetch_assoc();
 $laboratorio=$row['laboratorio'];
    // titulo 
    $titulo=$row['title'];

    // cuerpo
    $evento=$row['body'];

    // Fecha inicio
    $inicio=$row['inicio_normal'];

    // Fecha Termino
    $final=$row['final_normal'];

// Eliminar evento
if (isset($_POST['eliminar_evento'])) 
{
    $id  = evaluar($_GET['id']);
    $sql = "DELETE FROM agenda WHERE id = $id";
    if ($conexion->query($sql)) 
    {
        echo "Evento eliminado";
        
       
    }
    else
    {
        echo "El evento no se pudo eliminar";
    }
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?=$titulo?></title>
          <link rel="stylesheet" type="text/css" href="<?=$base_url?>css/bootstrap.min.css">
</head>
<body>
	 <h3><?=$titulo?></h3>
	 <hr>
     <b>Fecha inicio:</b> <?=$inicio?> <br>
     <b>Fecha termino:</b> <?=$final?>  <br>
 	 <b>Descripcion:</b><p><?=$evento?></p>
</body>
<form action="" method="post">
     <div class="modal-footer">
    <button type="submit" class="btn btn-danger" name="eliminar_evento">Eliminar</button>
</div>
</form>
</html>
