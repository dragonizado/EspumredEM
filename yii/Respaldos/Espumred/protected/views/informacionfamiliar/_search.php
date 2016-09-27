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
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'ccEmpleado'); ?>
		<?php echo $form->textField($model,'ccEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombreFamiliar'); ?>
		<?php echo $form->textField($model,'nombreFamiliar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'parantesco'); ?>
		<?php echo $form->textField($model,'parantesco',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'fechaDeNacimiento'); ?>
		<?php echo $form->textField($model,'fechaDeNacimiento',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'edad'); ?>
		<?php echo $form->textField($model,'edad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'escolaridad'); ?>
		<?php echo $form->textField($model,'escolaridad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'viveConEmpleado'); ?>
		<?php echo $form->textField($model,'viveConEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'dependeDelEmpleado'); ?>
		<?php echo $form->textField($model,'dependeDelEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->