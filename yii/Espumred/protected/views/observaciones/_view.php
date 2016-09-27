<?php
/* @var $this InformacionempleadoController */
/* @var $data Informacionempleado */
$model=Informacionempleado::model()->findByPk($data->id);
$modeloCargo=Cargos::model()->findByPk($data->cargo);
$modeloArea=Area::model()->findByPk($data->area);
$modeloContrato=Contrato::model()->findByPk($data->contrato);
$modeloInformacionPersonal=Informacionpersonal::model()->findByPk($data->informacionPersonal);
$suma=0;
/*for ($i=0; $i <count($model) ; $i++) { 
		if ($model[$i]["estado"]=="Activo") {
			$suma=$suma+1;
		}
		<b>Personal Activo: <?php echo CHtml::encode($suma); ?></b>
}*/
?>
<?php if ($data->estado=="ACTIVO"): ?>
	

<div class="col-md-4">


<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('cc')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode('Nombre Empleado'); ?>:</b>
	<?php echo CHtml::encode($modeloInformacionPersonal["nombre"]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('codigoNomina')); ?>:</b>
	<?php echo CHtml::encode($data->codigoNomina); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('carnet')); ?>:</b>
	<?php echo CHtml::encode($data->carnet); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Area')); ?>:</b>
	<?php echo CHtml::encode($modeloArea["nombreArea"]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Cargo')); ?>:</b>
	<?php echo CHtml::encode($modeloCargo["nombreCargo"]); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha Inicio Contrato')); ?>:</b>
	<?php echo CHtml::encode($modeloContrato["fechaIngreso"]); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('InformacionVivienda')); ?>:</b>
	<?php echo CHtml::encode($data->InformacionVivienda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('InformacionEconomica')); ?>:</b>
	<?php echo CHtml::encode($data->InformacionEconomica); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoEstudiantil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoEstudiantil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seguridadSocial')); ?>:</b>
	<?php echo CHtml::encode($data->seguridadSocial); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('area')); ?>:</b>
	<?php echo CHtml::encode($data->area); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contrato')); ?>:</b>
	<?php echo CHtml::encode($data->contrato); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehiculo')); ?>:</b>
	<?php echo CHtml::encode($data->vehiculo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contactoEmergencia')); ?>:</b>
	<?php echo CHtml::encode($data->contactoEmergencia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefonoContacto')); ?>:</b>
	<?php echo CHtml::encode($data->telefonoContacto); ?>
	<br />

	*/ ?>
	<div align="center">
        <?php 
             if(file_exists("images/Informacionempleado/thumbs/t_".$data->id.".jpg")){
                 echo "<img src='images/fotos/".$data->id.".jpg'> ";
             }else{    
                echo "<img src='images/fotos/".$data->id.".jpg'> ";
             }
             ?>

        	 <?php echo CHtml::submitButton('verHojaVida',array("id"=>$data->id, "class"=>"pdf form-control", "target"=>"_blank")); ?>	
        	
    </div>
     
             	
            </br></br></br>
 			 
</div>
</div>
<?php endif ?>