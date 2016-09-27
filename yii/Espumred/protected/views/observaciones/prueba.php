<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo Yii::app()->createUrl("observaciones/mail"); ?>" method="post" >
		correo electronico <input type="email" name="email">
		escribir un comentario<br>
		<textarea name="com"></textarea><br>
		<input type="submit" name="enviar" value="enviarcomentario">
	</form>

</body>
</html>

