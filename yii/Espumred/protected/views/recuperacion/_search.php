<?php
/* @var $this ClientesController */
/* @var $model Clientes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',

)); ?>
	<div class="col-md-4">
	<div >
		<?php echo $form->label($model,'Codigo'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombreCliente'); ?>
		<?php echo $form->textField($model,'nombreCliente',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;"));?>
	</div>

	
	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>

</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->