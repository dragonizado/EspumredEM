<?php 
$jpg = base64_decode($_POST["data"]);
$registro=Yii::app()->session['Ingreso'];
ini_set('date.timezone','America/Bogota'); 
			$fecha = date("d/m/Y g:i A");
$file = fopen("images/Porteria/".$registro['nombre']."-[".$fecha."]".".jpg", "w");
if($file){
        // Debe tener permiso de escritura.
	fwrite($file, $jpg);
	fclose($file);
	echo "ok";
}
else{
	echo "Error al abrir archivo";
}

?>