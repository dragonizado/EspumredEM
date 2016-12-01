<?php 
	$protocolo = 'http://';
	$hosting = $_SERVER['HTTP_HOST'];
	$url_host = $protocolo.$hosting."/";

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Estamos en mantenimiento</title>
</head>
<body>

	<p align="center" style="font-size:24px; margin-top:18vh"><strong>Estamos realizando algunas mejoras en el sistema, volveremos en unos minutos..</strong></p>
	<center><img src="<?php echo $url_host ?>yii/Espumred/images/mtto.png" alt="Mejorando el sistema"></center>
</body>
</html>