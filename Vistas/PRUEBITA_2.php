<!-- <div class="modal fade" id="PRUEBA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> -->
<?php
 echo "<div class='modal fade' id='PRUEBA-$idCot' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>";
?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>        
      </div>
      <div class="modal-body">

      <?php
        require("../Controlador/Conexion.php");
        $sql=("SELECT nombre,a.precio,cotizacionservicio_id FROM cotizaciones_etapas a INNER JOIN subservicios b ON a.etapas = b.id INNER JOIN cotizaciones_servicios c ON c.id_cotizacion = a.cotizacionservicio_id WHERE id_cotizacion= $idCot");
  
        $queryEtapasInfo=mysqli_query($mysqli,$sql);


        echo " <table class='table table-striped table-sm table-responsive-sm'>";
          echo "<thead style='color: blue' background='gray'>";
                      echo "<tr>";

            echo "<th>Etapa</th>";
            echo "<th>Precio</th>";
            echo "<th>Id de la cotizacion</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";  

          
      ?>
        
      <?php 
         while($arrayEtapasInfo=mysqli_fetch_array($queryEtapasInfo)){            
            echo "<tr>";
              echo "<td>$arrayEtapasInfo[0]</td>";
              echo "<td>$arrayEtapasInfo[1]</td>";
              echo "<td>$arrayEtapasInfo[2]</td>";
              
              
            
          echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
      ?>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerra</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>