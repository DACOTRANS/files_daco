<!DOCTYPE html>

<html>

<head>
		<title>Sesion</title>
		<!--<meta http-equiv ="refresh" content="1; url=https://localhost/webonline">-->

		
</head>

<body>
	
		<?php
			session_start();
			$server="localhost";
			$usuario="root";
			$contraseña="G1989*";
			$bd="bdpruebag";

			 $conexion = mysqli_connect ($server, $usuario, $contraseña, $bd) or die("Error de Conexion");
	
            
            $user = $_POST['txtuser'];
            $password = $_POST['txtpassword'];

            $consulta = mysqli_query ($conexion,"SELECT * FROM usuarios WHERE user = '$user' AND password = '$password'Limit 1");
                      if (mysqli_num_rows($consulta)===1 ){
                      	  $_session['conectado']=true;
                      	  $_session['user']=$usuario;
                      	  $_session['inicio']=time();
                      	  $_session['id']=$user['user_id';]
                      	  header("location: index.php");                      	  
                      	  }
                      	  
                         else{
                                     echo 'Datos Incorrectos';
                                }

         ?>  

</body>
</html>