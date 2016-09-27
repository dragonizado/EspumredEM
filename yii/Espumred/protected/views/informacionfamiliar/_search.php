<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	

	<div >
		<?php echo $form->label($model,'ccEmpleado'); ?>
		<?php echo $form->textField($model,'ccEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombreFamiliar'); ?>
		<?php echo $form->textField($model,'nombreFamiliar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	
	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->