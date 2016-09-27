<?php 
$jpg = base64_decode($_POST["data"]);
$registro=Yii::app()->session['Ingreso'];
ini_set('date.timezone','America/Bogota'); 
$hora=date("g-i-A");
$fecha = date("d-m-Y");
//$file = fopen("images/Porteria/foto3[30-03-2015-hora-11-08].jpg", "w");
$Nombre = str_replace(array("á"), "a",$registro['nombre']." ".$registro['apellidos']);
$Nombre = str_replace(array("é"), "e",$Nombre);
$Nombre = str_replace(array("í"), "i",$Nombre);
$Nombre = str_replace(array("ó"), "o",$Nombre);
$Nombre = str_replace(array("ú"), "u",$Nombre);
$Nombre = str_replace(array("ñ"), "n",$Nombre);
$Nombre = str_replace(array("Á"), "A",$Nombre);
$Nombre = str_replace(array("É"), "E",$Nombre);
$Nombre = str_replace(array("Í"), "I",$Nombre);
$Nombre = str_replace(array("Ó"), "O",$Nombre);
$Nombre = str_replace(array("Ú"), "U",$Nombre);
$Nombre = str_replace(array("Ñ"), "N",$Nombre);
$Nombre = str_replace(array("Á"), "A",$Nombre);
$Nombre = str_replace(array("É"), "E",$Nombre);
$Nombre = str_replace(array("Í"), "I",$Nombre);
$Nombre = str_replace(array("Ó"), "O",$Nombre);
$Nombre = str_replace(array("Ú"), "U",$Nombre);
$Nombre = str_replace(array("Ñ"), "N",$Nombre);
$Nombre = str_replace(array("ä"), "a",$Nombre);
$Nombre = str_replace(array("ë"), "e",$Nombre);
$Nombre = str_replace(array("ï"), "i",$Nombre);
$Nombre = str_replace(array("ö"), "o",$Nombre);
$Nombre = str_replace(array("ü"), "u",$Nombre);
$Nombre = str_replace(array("Ä"), "A",$Nombre);
$Nombre = str_replace(array("Ë"), "E",$Nombre);
$Nombre = str_replace(array("Ï"), "I",$Nombre);
$Nombre = str_replace(array("Ö"), "O",$Nombre);
$Nombre = str_replace(array("Ü"), "U",$Nombre);



$file = fopen("images/Porteria/".$Nombre."-[".$fecha."]".".jpg", "w");
if($file){
	fwrite($file, $jpg);
	fclose($file);
	echo "ok";
}
else{
	echo "Error al abrir archivo";
}

?>