<!DOCTYPE html>

<html>

<head>
		<title>	Registrar</title>
		<meta http-equiv ="refresh" content="1; url=https://localhost/webonline/Sesion.php">

		
</head>

<body>
		<?php  
			$server="localhost";
			$usuario="root";
			$contraseña="G1989*";
			$bd="bdpruebag";

			 $conexion = mysqli_connect ($server, $usuario, $contraseña, $bd) or die("Error de Conexion");

			 $user = $_POST['txtuser'];
			 $password = $_POST['txtpassword'];
			 $id='0';

			 $insertar = "INSERT into usuarios values ('$id' , '$user', '$password')" ;
			 $resultado = mysqli_query($conexion, $insertar) or die("Error al insertar los registros");

			 mysqli_close($conexion);
			 //echo "Datos insertados Correctamente";
			 
		?>


</body>
</html>