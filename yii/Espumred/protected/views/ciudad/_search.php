<?php
/* @var $this CiudadController */
/* @var $model Ciudad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">


	<div >
		<?php echo $form->label($model,'NombreCiudad'); ?>
		<?php echo $form->textField($model,'NombreCiudad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->