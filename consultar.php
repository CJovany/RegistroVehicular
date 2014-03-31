
<?php

	require 'conectar.php';
	$tarj =$_POST["Tarjeton"];
//	$nombre = $_POST["Nombre"];	
	$contr= $_POST["Contra"];
	
	$sql="SELECT * FROM personas where id_persona='$tarj' and contrasena='$contr'";
	
	$resultado=mysql_query($sql,$con);
	
	if(!$resultado){
		echo "Los datos no se pudieron consultar".mysql_error();
		}
	else{
		while($row = mysql_fetch_array($resultado)){
	printf("
				 <td>Tarjeton: %s</td>
				 <td>Nombre: %s</td>
				 <td>Apellido Paterno: %s</td>
			   <td>Apellido Materno: %s</td>	
				 <td>Cargo: %s</td>
				 <td>Teléfono: %s</td>
		       <td>Contraseña: %s</td>
				 <td>Placas auto 1: %s</td>
				 <td>Placas auto 2: %s</td>
				 <td>Placas auto 3: %s</td> 
				 ",
				 $row["id_persona"],$row["nombre"],$row["apPat"],$row["apMat"],$row["cargo"],$row["telefono"],$row["contrasena"],$row["auto1"],$row["auto2"],$row["auto3"]);
	}

	mysql_free_result($resultado);
	
	}
		
		
	mysql_close($con);
?>