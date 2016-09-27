<?php
/* @var $this MecanicosController */
/* @var $model Mecanicos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	<div >
		<?php echo $form->label($model,'cc'); ?>
		<?php echo $form->textField($model,'cc',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Direccion'); ?>
		<?php echo $form->textField($model,'Direccion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Telefono'); ?>
		<?php echo $form->textField($model,'Telefono',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Fecha_Modificacion'); ?>
		<?php echo $form->textField($model,'Fecha_Modificacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

		<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->