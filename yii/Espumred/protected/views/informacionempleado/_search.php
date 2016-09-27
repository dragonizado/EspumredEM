<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-md-4">
	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'codigoNomina'); ?>
		<?php echo $form->textField($model,'codigoNomina',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'carnet'); ?>
		<?php echo $form->textField($model,'carnet',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'informacionAcademica'); ?>
		<?php echo $form->textField($model,'informacionAcademica',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'informacionPersonal'); ?>
		<?php echo $form->textField($model,'informacionPersonal',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'informacionFamiliar'); ?>
		<?php echo $form->textField($model,'informacionFamiliar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'InformacionVivienda'); ?>
		<?php echo $form->textField($model,'InformacionVivienda',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'InformacionEconomica'); ?>
		<?php echo $form->textField($model,'InformacionEconomica',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'estadoEstudiantil'); ?>
		<?php echo $form->textField($model,'estadoEstudiantil',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'seguridadSocial'); ?>
		<?php echo $form->textField($model,'seguridadSocial',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'contrato'); ?>
		<?php echo $form->textField($model,'contrato',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'vehiculo'); ?>
		<?php echo $form->textField($model,'vehiculo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'contactoEmergencia'); ?>
		<?php echo $form->textField($model,'contactoEmergencia',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'telefonoContacto'); ?>
		<?php echo $form->textField($model,'telefonoContacto',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

		<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->