<?php
  echo "<p>Cargando...</p>";
?>

<!-- <form method="POST" action="../Vistas/Datos_Equipo.php" style="display:none;">
  <input type="hidden" name="Proveedor" value=" <?php/* echo $_POST['Proveedor'];*/ ?>" >
  <input type="hidden" name="tipo" value="<?php /*echo $_POST['tipo']; */?>" >
  <input type="hidden" name="equipo" value="<?php /*echo $_POST['equipo'];*/ ?>" >
  <input type="hidden" name="equipoCGnombre" value="<?php /*echo $_POST['equipo'];*/ ?>" >
  <input type="hidden" name="marca" value="<?php /*echo $_POST['marca']; */?>" >
  <input type="hidden" name="modelo" value="<?php /*echo $_POST['modelo']; */?>" >
  <input type="hidden" name="serie" value="<?php /*echo $_POST['serie']; */?>" >
  <input type="hidden" name="identificacion" value="<?php/* echo $_POST['identificacion'];*/ ?>" >
  <input type="hidden" name="precioTotalCiclos" value="<?php/*- echo $_POST['precioTotalCiclos']; */?>" >
  <button type="submit" name="postBack" id="postBack">Enviar<button>
</form> -->

<form method="POST" action="../Vistas/datos_registrados_2.php" style="display:none;">
  <input type="hidden" name="Proveedor" value="<?php echo $_POST['Proveedor']; ?>" >
  <input type="hidden" name="equipo" value="<?php echo $_POST['equipo']; ?>" >
  <input type="hidden" name="equipoCGnombre" value="<?php echo $_POST['equipo']; ?>" >
  <input type="hidden" name="marca" value="<?php echo $_POST['marca']; ?>" >
  <input type="hidden" name="modelo" value="<?php echo $_POST['modelo']; ?>" >
  <input type="hidden" name="serie" value="<?php echo $_POST['serie']; ?>" >
  <input type="hidden" name="identificacion" value="<?php echo $_POST['identificacion']; ?>" >
  <!-- <input type="hidden" name="Subservicio[]" value="<?php /*echo $_POST['Subservicio[]']; */?>" >
  <input type="hidden" name="Item_Precio_subservicio[]" value="<?php /*echo $_POST['Item_Precio_subservicio']; */?>" >
  <input type="hidden" name="Item_ciclo_subservicio[]" value="<?php /*echo $_POST['Item_ciclo_subservicio'];*/ ?>" >
  <input type="hidden" name="Item_ciclo_repetir[]" value="<?php /*echo $_POST['Item_ciclo_repetir']; */?>" > -->
  <input type="hidden" name="precioTotalCiclos" value="<?php echo $_POST['precioTotalCiclos']; ?>" >
  <input type="hidden" name="agregar" value="agregar" > 
  <button type="submit" name="postBack" id="postBack">Enviar<button>
</form>

<?php
require("Conexion.php");
// $id_servicio = $_POST["id_servicio"];
// $sql = ("SELECT * FROM servicio where id_servicio='$id_servicio'");
// $query = mysqli_query($mysqli, $sql);

// while ($arreglo = mysqli_fetch_array($query)) {
//   $Nombre_servicio = ($arreglo[1]);
// }
$Proveedor = $_POST['Proveedor'];
$tipo = $_POST["tipo"];
$equipo = $_POST["equipo"];
$marca = $_POST["marca"];
$modelo = $_POST["modelo"];
$serie = $_POST["serie"];
$identificacion = $_POST["identificacion"];
$precioTotalCiclos = $_POST["precioTotalCiclos"];
$Subservicio = [];
$Item_Precio_subservicio = [];
$Item_ciclo_subservicio[] = [];
$Item_ciclo_repetir = [];


if (isset($_POST["Subservicio"]) && isset($_POST["Item_Precio_subservicio"]) 
  && isset($_POST["Item_ciclo_subservicio"]) && isset($_POST["Item_ciclo_repetir"])) {
  $Subservicio = $_POST["Subservicio"];
  $Item_Precio_subservicio = $_POST["Item_Precio_subservicio"];
  $Item_ciclo_subservicio = $_POST["Item_ciclo_subservicio"];
  $Item_ciclo_repetir = $_POST["Item_ciclo_repetir"];



  $sql = ("SELECT * FROM personal where empresa='$Proveedor' and magnitud='$equipo'");
  $query = mysqli_query($mysqli, $sql);


  while ($arreglo = mysqli_fetch_array($query)) {
    $personal = ($arreglo[3]);
    if ($personal > 0) {
      date_default_timezone_set("America/Santiago");
      require("../Controlador/Conexion.php");
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
            // echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento&id_servicio=$id_servicio'</script>";
            // echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento'</script>";
            echo "<script>location.href='../Vistas/datos_registrados_2.php'</script>";



            echo '<script>document.getElementById("postBack").click();</script> ';
          }
        }
      } else {
        // echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento&id_servicio=$id_servicio'</script>";
        // echo "<script>location.href='../Vistas/Datos_instrumento.php?Proveedor=$Proveedor&tipo=$tipo&precio=$precio&Cantidad=$cantidad&total=$total&instrumento=$instrumento'</script>";
        echo '<script>document.getElementById("postBack").click();</script> ';
        echo "<script>location.href='../Vistas/datos_registrados_2.php'</script>";



      }
    } else {
      echo '<script>alert("El proveedor no tiene personal disponible");location.href="../Vistas/Panel_Cliente.php";</script> ';
    }
  }
  echo '<script>alert("El proveedor no tiene personal disponible");location.href="../Vistas/Panel_Cliente.php";</script> ';
  //}
}
?>