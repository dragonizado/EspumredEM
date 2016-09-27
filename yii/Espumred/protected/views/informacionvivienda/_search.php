<?php
/* @var $this InformacionviviendaController */
/* @var $model Informacionvivienda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-md-4">
	

	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'numeroDeHabitantes'); ?>
		<?php echo $form->textField($model,'numeroDeHabitantes',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'indiceHacimiento'); ?>
		<?php echo $form->textField($model,'indiceHacimiento',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'estrato'); ?>
		<?php echo $form->textField($model,'estrato',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tenenciaDeLaVivienda'); ?>
		<?php echo $form->textField($model,'tenenciaDeLaVivienda',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tipoDeVivienda'); ?>
		<?php echo $form->textField($model,'tipoDeVivienda',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'numeroDeHabitacion'); ?>
		<?php echo $form->textField($model,'numeroDeHabitacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
	
		<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->