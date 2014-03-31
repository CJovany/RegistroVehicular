
<?php

	require 'conectar.php';
	$nombre = $_POST["Nombre"];
	$apPaterno = $_POST["ApellidoP"];
	$apMaterno = $_POST["ApellidoM"];
	$cargo = $_POST["Cargo"];
	$telefono = $_POST["Telefono"];
	$contr = $_POST["Contra"];
	$auto1 = $_POST["Autos1"];
	$auto2 = $_POST["Autos2"];
	$auto3 = $_POST["Autos3"];
	
	$sql="INSERT INTO personas (id_persona, nombre, apPat, apMat,cargo, telefono, contrasena, auto1, auto2, auto3) values (' ', '$nombre', '$apPaterno', '$apMaterno', '$cargo', '$telefono', '$contr', '$auto1', '$auto2', '$auto3')";
	
	$resultado=mysql_query($sql,$con);			
	
	if($resultado){
		//echo "El registro se almaceno de manera correcta";
		$cons="select id_persona from personas where nombre='$nombre'";					
		$res2=mysql_query($cons,$con);	
		while($row = mysql_fetch_array($res2)){
	printf("Tu Número de Tarjeton: %s",$row["id_persona"]);
	}
	mysql_free_result($res2);
	}else{
		echo "Los datos no se pudieron registrar".mysql_error();
		}
	mysql_close($con);
?>