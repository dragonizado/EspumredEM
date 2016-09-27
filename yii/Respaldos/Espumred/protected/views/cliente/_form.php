<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> con obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div >
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'CC'); ?>
		<?php echo $form->textField($model,'CC',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'CC'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Direccion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Telefono'); ?>
	</div>

	

	<br>
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
</div>
	<div class="col-md-4"></div>

<?php $this->endWidget(); ?>

</div><!-- form -->