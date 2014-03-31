
<?php

	require 'conectar.php';
	$usuario = $_POST["Nombre"];
    $password = $_POST["Contra"];
	$tarj=$_POST["Tarj"];
	$nom=$_POST["Nom2"];
	$apPat=$_POST["ApPat"];
	$apMat=$_POST["ApMat"];
	$cargo=$_POST["Cargo"];
	$phone=$_POST["Telef"];
	$carro1=$_POST["Car1"];
	$carro2=$_POST["Car2"];	
	$carro3=$_POST["Car3"];	

	
	$sql="update personas set nombre='$nom', apPat='$apPat', apMat='$apMat', cargo='$cargo', telefono='$phone', auto1='$carro1',auto2='$carro2', auto3='$carro3' where id_persona='$tarj' and contrasena='$password'";
	
	$resultado=mysql_query($sql,$con);
	
	if($resultado){
		echo "Los datos se actualizaron correctamente";
		}
	else{
		echo "Los datos no se pudieron actualizar, verifique su numero de tarjeton, su usuario y su password".mysql_error();		
		}
		
		mysql_close($con);
?>