<?php
/* @var $this RegistropersonalController */
/* @var $data Registropersonal */
// echo $data->nombre."---";
// echo count($data->nombre)."???";

$Nombre = str_replace(array("á"), "a",$data->nombre);
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



?>
<div class="col-md-4">
	<div align="center">
        <?php 
             if(file_exists("images/Registropersonal/thumbs/t_".$Nombre."-[".$data->fecha."].jpg")){
                 echo "<img src='images/Porteria/".$Nombre."-[".$data->fecha."].jpg'> ";
             }else{    
                echo "<img src='images/Porteria/".$Nombre."-[".$data->fecha."].jpg'> ";
             }
             ?>

        		
        	
    </div>

<div class="col-md-4">

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	
	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('observacion')); ?>:</b>
	<?php echo CHtml::encode($data->observacion); ?>
	<br />
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('horaingreso')); ?>:</b>
	<?php echo CHtml::encode($data->horaingreso); ?>
	<br />

</div>
<div>
 <?php echo CHtml::submitButton('Salida',array("id"=>$data->id, "class"=>"salida form-control", "target"=>"_blank")); ?>
</div>

</div>