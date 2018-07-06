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
		<center><h1>Resgistrarme Web DacoGuatemala </h1>   </center>
		
		<center>
		<form action="Registro.php" method="POST">
			<hr />
		 <h3>Crear un Cuenta</h3> </center>

				<center>
				<label for="nombre">Nombre de Usuario:</label><br>
				<input type="text" name="txtuser" maxlength="32" required>
				<br/>
				</center>
				
				<center>
				<label for="password">Password:</label>
				<br>	
				<input type="text" name="txtpassword" maxlength="8" required>
				<br><br>

				<input type="submit" value="Registrarme" name="btnregistrar">
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
