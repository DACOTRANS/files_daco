<?php



		$user="root";
		$pass="";
		$server="192.168.0.10:8080";
		$db="bdpruebag";
		$con=mysql_connect($server, $user, $pass, $db);
				  or die ("Error al conectar a la base de datos");



	   	include("conexion.php");
		$con=conectar();
		echo "Se realizo exitosamente la conexion ";
		

?>

