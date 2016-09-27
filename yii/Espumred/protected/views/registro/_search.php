<?php
/* @var $this RegistroController */
/* @var $model Registro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	<div>
		<?php echo $form->label($model,'idMecanico'); ?>
		<?php echo $form->textField($model,'idMecanico',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->