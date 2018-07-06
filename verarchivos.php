<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<TITLE>VER ARCHIVOS</TITLE>
	</head>
	<body>
		<div> 
			<form action="./subir.php" method="POST" enctype="multipart/form-data">
				<input type="file" name="archivo" />
				<input type="submit" value="Cargar Archivo" />
			</form>
		</div>
		<div>
			<h1>ver archivos en el directorio</h1>
			<table>
				<tr>
					<td>TIPO</td>
					<td>NOMBRE</td>
					<td>TAMAÑO(mb)</td>
					<td>DESCARGAR</td>
				</tr>

				<?php
					$archivos=opendir('./cloud_cl');
					//var_dump($archivos);
					while ($list=readdir($archivos)) {
						if ($list!=='.' and $list!=='..') {
							?>
							<tr>
								<td><?php $info = new SplFileInfo('./cloud_cl/'.$list); $extencion= $info->getExtension(); if (file_exists('./img/'.$extencion.'.png')) { ?><img src='./img/<?php echo $extencion?>.png'> <?php }else{ ?> <img src='./img/blanco.png'> <?php }?>							</td>
								<td><?php echo $list ?></td>
								<td><?php echo $file_size=filesize('./cloud_cl/'.$list)/1024?></td>
								<td><a href='descarga.php?file=<?php echo $list ?>'><img src="./img/download.png"></a></td>
							</tr>
							<?php
						}
					}
				?>
			</table>
		</div>
	</body>
</html>