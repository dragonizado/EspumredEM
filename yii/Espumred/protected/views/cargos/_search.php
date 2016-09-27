<?php
/* @var $this CargosController */
/* @var $model Cargos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-md-4">
	

	<div >
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombreCargo'); ?>
		<?php echo $form->textField($model,'nombreCargo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'codigoSena'); ?>
		<?php echo $form->textField($model,'codigoSena',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
	<div class="buttons">
		<br>
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->