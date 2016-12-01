<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */

?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'recuperacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span>son obligatorios.</p><br>

	<?php echo $form->errorSummary($model); ?>

	<div >
		<?php echo $form->labelEx($model,'Nombre Usuario'); ?>
		<center><?php echo $form->textField($model,'Nombre Usuario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?><br><center>
		<?php echo $form->error($model,'Nombre Usuario'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'Correo Electronico'); ?>
		<?php echo $form->textField($model,'Correo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?><br>
		<?php echo $form->error($model,'Correo'); ?>
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