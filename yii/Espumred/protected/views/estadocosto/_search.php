<?php
/* @var $this EstadocostoController */
/* @var $model Estadocosto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>35,'maxlength'=>35)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fechaCosto'); ?>
		<?php echo $form->textField($model,'fechaCosto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>

<?php $this->endWidget(); ?>

</div><!-- search-form -->