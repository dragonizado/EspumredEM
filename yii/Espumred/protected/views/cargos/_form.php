<?php
/* @var $this CargosController */
/* @var $model Cargos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cargos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<div class="col-md-4"></div>
	<div class="col-md-4">

<!-- 	<div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

	<div >
		<?php echo $form->labelEx($model,'nombreCargo'); ?>
		<?php echo $form->textField($model,'nombreCargo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'nombreCargo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'codigoSena'); ?>
		<?php echo $form->textField($model,'codigoSena',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codigoSena'); ?>
	</div>



	<div align="center"class="row buttons">
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

	</div>
	<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->