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


     ?>
     <?php


// Incluimos nuestro archivo config
include 'config.php'; 

// Sentencia sql para traer los agenda desde la base de datos
$sql="SELECT * FROM agenda WHERE laboratorio='$NombreR'"; 

// Verificamos si existe un dato
if ($conexion->query($sql)->num_rows)
{ 

    // creamos un array
    $datos = array(); 

    //guardamos en un array multidimensional todos los datos de la consulta
    $i=0; 

    // Ejecutamos nuestra sentencia sql
    $e = $conexion->query($sql); 

    while($row=$e->fetch_array()) // realizamos un ciclo while para traer los agenda encontrados en la base de dato
    {
        // Alimentamos el array con los datos de los agenda
        $datos[$i] = $row; 
        $i++;
    }

    // Transformamos los datos encontrado en la BD al formato JSON
        echo json_encode(
                array(
                    "success" => 1,
                    "result" => $datos
                )
            );

    }
    else
    {
        // Si no existen agenda mostramos este mensaje.
        echo "No hay datos"; 
    }


?>
