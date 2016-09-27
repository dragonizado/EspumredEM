<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clientes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> con obligatorios.</p><br>

	<?php echo $form->errorSummary($model); ?>

	<div >
		<?php echo $form->labelEx($model,'Codigo'); ?>
		<center><?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?><br><center>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'nombreCliente'); ?>
		<?php echo $form->textField($model,'nombreCliente',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?><br>
		<?php echo $form->error($model,'nombreCliente'); ?>
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