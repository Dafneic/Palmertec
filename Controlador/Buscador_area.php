<?php 
$conexion=mysqli_connect('localhost','root','','palmertec');
$nombre=$_POST['nombres'];

	$sql=("SELECT * FROM cotizaciones where id_cotizacion='$nombre' or laboratorio='$nombre' or acreditacion='$nombre' or tipo_magnitud='$nombre' or magnitud='$nombre' or instrumento='$nombre' or exactitud='$nombre' or alcance_minimo='$nombre'  or alcance_maximo='$nombre'" );

	$result=mysqli_query($conexion,$sql);
	while ($arreglo=mysqli_fetch_array($result)) {

	if($arreglo==0){

	}else{

	$cadena=" <table class='table table-striped table-sm table-responsive-sm'>
          <thead style='color: blue' background='gray'>
	 <thead>
                   
                        <th>Id</th>
            <th>Laboratorio</th>
            <th>Acreditación</th>
            <th>Categoria</th>
           <th>Servicio</th>
            <th>Instrumento</th>
            <th>exactitud</th>
            <th>Alcance mínimo</th>
           <th>Alcance máximo</th>
<th>Eliminar</th>                  
                        
                        
                    </thead>";


	
	
		$cadena=$cadena."<tr>
<td>".$arreglo[0]."</td>
<td>".$arreglo[1]."</td>
<td>".$arreglo[2]."</td>
<td>".$arreglo[3]."</td>
<td>".$arreglo[4]."</td>
<td>".$arreglo[5]."</td>
<td>".$arreglo[6]."</td>
<td>".$arreglo[7]."</td>
<td>".$arreglo[8]."</td>

<td><a href='areas_laboratorio.php?id=".$arreglo[0]."&idborrar=2'><img src='../img/borrar_area.png' width='60' class='img-rounded'/></a></td>".
"<td></td>".
            

            
                           "</tr>
</tr>";


	}

	echo  $cadena."</select>";
	
}
?>

  
       
       

   