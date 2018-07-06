<?php
	$ftp_server="192.168.0.72";
	$ftp_usuario="david";
	$ftp_pass="david";
	$con_id=ftp_connect($ftp_server);
	//ftp_pasv($con, true);
	$lr=ftp_login($con_id, $ftp_usuario, $ftp_pass);
	if((!$con_id)||(!$lr)){
		echo "no se pudo conectar";
		exit;
	}else{
		echo "conectado correctamente";
		$temp=explode(".", $_FILES['archivo']['name']);
		$source_file=$_FILES['archivo']['tmp_name'];
		$destino="cloud_cl";
		$nombre=$_FILES["archivo"]['name'];
		//ftp_chdir($con_id, $destino)
		if (ftp_put($con_id, $destino.'/'.$nombre, $source_file, FTP_BINARY)) {
			echo "archivo subido correctamente";
			header("Location: verarchivos.php");
		}else{
			echo "ha ocurrido un error";
		}
	}
?>