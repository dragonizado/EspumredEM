<?php

	$destino=$_POST['email'];
	$asunto="comentario";

	$comentario="hola";
	$headers='From:'.$_POST['email']."\r\n".
			 'Reply-To'.$_POST['email']."\r\n".
			 'X-Malier:PHP/'.phpversion();
	
			 mail($destino, $asunto, $headers);
			 echo "mensaje enviado";

?>
