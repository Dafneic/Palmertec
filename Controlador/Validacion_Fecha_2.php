<?php
require("Conexion.php");
$id_servicio = $_POST["id_servicio"];
$sql = ("SELECT * FROM servicio where id_servicio='$id_servicio'");
$query = mysqli_query($mysqli, $sql);
?>
        
      <?php
      while ($arreglo = mysqli_fetch_array($query)) {


        $Nombre_servicio = ($arreglo[1]);
      }




      ?>

   <?php
    require("Conexion.php");

    $Proveedor = $_POST['Proveedor'];

    $tipo = $_POST["tipo"];

    $precio = $_POST["precio"];

    $cantidad = $_POST["Cantidad"];
    $total = $_POST["total"];
    $cantidad = $_POST["Cantidad"];
    $instrumento = $_POST["Instrumento"];
    $sql = ("SELECT * FROM personal where empresa='$Proveedor' and magnitud='$Nombre_servicio'");

    $query = mysqli_query($mysqli, $sql);



    ?>
        
      <?php
      while ($arreglo = mysqli_fetch_array($query)) {


        $personal = ($arreglo[3]);

        if ($personal > 0) {
          # code...









      ?>

<?php
          date_default_timezone_set("America/Santiago");

          require("../Controlador/Conexion.php");


          // if (isset($Proveedor)) {

          //    echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento&id_servicio=$id_servicio'</script>";
          //  }else{







          $checkemail = mysqli_query($mysqli, "SELECT * FROM agenda WHERE laboratorio='$Proveedor' and class='event-warning'");
          $check_mail = mysqli_num_rows($checkemail);
          if ($check_mail > 0) {
            $sql = ("SELECT * FROM agenda where laboratorio='$Proveedor' and class='event-warning'");

            $query = mysqli_query($mysqli, $sql);



            while ($arreglo = mysqli_fetch_array($query)) {
              $inicio = $arreglo[8];
              echo "<br>";
              $fin = $arreglo[9];
              echo "<br>";

              $fecha_actual = date('d/m/Y H:i:s');


              if (($fecha_actual >= $inicio) and ($fecha_actual <= $fin)) {
                echo '<script>alert("El proveedor no esta en servicio")</script> ';
                echo "<script>location.href='../Vistas/Panel_Cliente.php'</script>";
              } else {
                echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento&id_servicio=$id_servicio'</script>";
              }
            }
          } else {

            echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento&id_servicio=$id_servicio'</script>";
          }
        } else {
          echo '<script>alert("El proveedor no tiene personal disponible")</script> ';
          echo "<script>location.href='../Vistas/Panel_Cliente.php'</script>";
        }
      }
      echo '<script>alert("El proveedor no tiene personal disponible")</script> ';
      echo "<script>location.href='../Vistas/Panel_Cliente.php'</script>";
      //}



?>