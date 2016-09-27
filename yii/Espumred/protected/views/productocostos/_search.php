<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	

	<div >
		<?php echo $form->label($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'medidas'); ?>
		<?php echo $form->textField($model,'medidas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'calibre'); ?>
		<?php echo $form->textField($model,'calibre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'precioMayoristas'); ?>
		<?php echo $form->textField($model,'precioMayoristas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'precioCorreria'); ?>
		<?php echo $form->textField($model,'precioCorreria',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>

<?php $this->endWidget(); ?>
</div>
</div><!-- search-form -->