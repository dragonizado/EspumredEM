<?php
/* @var $this FormacionController */
/* @var $model Formacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->label($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'codlote'); ?>
		<?php echo $form->textField($model,'codlote',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'altura'); ?>
		<?php echo $form->textField($model,'altura',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'ancho'); ?>
		<?php echo $form->textField($model,'ancho',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'largo'); ?>
		<?php echo $form->textField($model,'largo',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'fecha_validacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control', 'placeholder'=>'2015-09-30')); ?>
		
	</div>

	
	
	
</div>

<div class=" buttons" align="center">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->