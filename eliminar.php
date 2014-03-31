
<?php

	require 'conectar.php';
	$nombre = $_POST["Nombre"];	
	$contr = $_POST["Contra"];
	
	$sql="DELETE FROM personas where nombre='$nombre' and contrasena='$contr'";
	
	$resultado=mysql_query($sql,$con);
	
	if($resultado){
		echo "Todos tus registros se eliminarón de manera correcta";
	}else{
		echo "Los registros no se pudieron eliminar".mysql_error();
		}
	mysql_close($con);
?>