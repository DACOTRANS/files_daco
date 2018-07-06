<!DOCTYPE html>

<html>


		<head>

				<title>	webDaco </title>
				<html lang="en">
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		        <meta name="description" content="">
		        <meta name="author" content="">
				 <!-- Bootstrap core CSS -->
		        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		        <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
		        <!-- Custom styles for this template -->
		        <link href="css/half-slider.css" rel="stylesheet">

		</head>

<body>
		
		<br>
		<center><h1>Dacotrans Guatemala ONLINE </h1>   </center>
		
		<center>
		<!-- Crear codigo de validacion de sesion  usuario + passwrod-->	

		<form action="SesionV.php" method="POST">
			<hr />
			<br>
			<br>
		 <h3>Iniciar Sesión</h3> </center>

				<center>
				<br>
				<label for="nombre">Usuario:</label><br>
				<input type="text" name="txtuser" maxlength="32" required>
				<br/>
				</center>
				
				<center>
				<label for="password">Contraseña:</label>
				<br>	
				<input type="password" name="txtpassword" maxlength="8" required>
				<br><br>

				<input type="submit" value="iniciar Sesión" name="btnregistrar">
				</center>
		</form>

		<!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>



</body>
</html>
