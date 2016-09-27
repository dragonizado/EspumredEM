<?php
/* @var $this IngresopersonalController */
/* @var $model Ingresopersonal */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'area'); ?>
		<?php echo $form->textField($model,'area',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'pertenencia'); ?>
		<?php echo $form->textField($model,'pertenencia',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<br>
		<br>
	</div>

	

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
		<br>
		<br>
	</div>

</div>

	

<?php $this->endWidget(); ?>

</div><!-- search-form -->