


   <?php
 $id= $_GET['id'];
      $idborrar= $_GET['idborrar'];
        require("Conexion.php");
        $sql=("SELECT * FROM tbl_documentos");
  
        $query=mysqli_query($mysqli,$sql);


          
      ?>
        
      <?php 
         while($arreglo=mysqli_fetch_array($query)){
      

          extract($_GET);
          if(@$idborrar==2){
    
            $sqlborrar="DELETE FROM tbl_documentos WHERE id_documento=$id";
            $resborrar=mysqli_query($mysqli,$sqlborrar);
        
          }

      ?>




<?php
include_once 'config.inc.php';

 $nombre= $_GET['nombre'];
      $laboratorio= $_GET['laboratorio'];
            $titulo= $_GET['titulo'];
            $descri= $_GET['descripcion'];
             $cliente= $_GET['razon'];
                   $tamanio= $_GET['tamaño'];
             $tipo= $_GET['tipo'];
             $nombre= $_GET['nombre'];
    if ($nombre != "") {


         



            $db=new Conect_MySql();
            $sql = "INSERT INTO reportes_rechazados(id_documento,laboratorio,titulo,descripcion,nombre_razon_social,tamanio,tipo,nombre_archivo) VALUES('$id','$laboratorio','$titulo','$descri','$cliente','$tamanio','$tipo','$nombre')";
            $query = $db->execute($sql);
            if($query){
                echo ' <script language="javascript">alert("Reporte rechazado");</script> ';
                echo "<script>location.href='../Vistas/Reportes.php'</script>";   
            }else{
                 echo ' <script language="javascript">alert("Errror contacte a soporte");</script> ';
                echo "<script>location.href='../Vistas/Reportes.php'</script>";   
            } 
     
}
}
?>
