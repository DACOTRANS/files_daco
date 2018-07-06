<?php
	if (!isset($_GET['file']) || empty($_GET['file'])) {
		exit;
	}
	$archivo=basename($_GET['file']);
	$ruta= './cloud_cl/'.$archivo;
	if (is_file($ruta)) {
		header('Content-Type: application/force-download');
		header('Content-Disposition: attachment; filename='.$archivo);
		header('Content-Transfer-Encoding: binary');
		header('Content-Length: '.filesize($ruta));

		readfile($ruta);
	}
?>