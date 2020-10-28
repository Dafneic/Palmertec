<?php 
$conexion=mysqli_connect('localhost','root','','palmertec');
$nombre=$_POST['nombres'];

	$sql=("SELECT * FROM proveedor where nombre_razon_social='$nombre' or rfc='$nombre' or acreditacion='$nombre' or nombre_contacto='$nombre' or domicilio='$nombre' or codigo_postal='$nombre' or telefono='$nombre' or movil='$nombre'  or correo='$nombre'" );

	$result=mysqli_query($conexion,$sql);
	while ($arreglo=mysqli_fetch_array($result)) {

	if($arreglo==0){

	}else{

	$cadena=" <table class='table table-striped table-sm table-responsive-sm'>
          <thead style='color: blue' background='gray'>
	 <thead>
                   
                        <th>Id</th>
            <th>Nombre o razon social</th>
            <th>Rfc</th>
            <th>Acreditación</th>
           <th>Nombre de contacto</th>
            <th>Domicilio</th>
            <th>Código Postal</th>
            <th>Telefono</th>
            <th>Modificar</th>
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

<td><a href='modificar_proveedor.php?id=".$arreglo[0]."'><img src='../img/modificar.png' width='60' class='img-rounded'></td>".
"<td><a href='proveedores.php?id=".$arreglo[0]."&idborrar=2'><img src='../img/borrar_usuario.png' width='60' class='img-rounded'/></a></td>".
"<td><a href='registro_areas_laboratorio.php?id=$arreglo[0]'>Cotizaciones</a></td>".
            

            
                           "</tr>
</tr>";


	}

	echo  $cadena."</select>";
	
}
?>

  
       
       

   