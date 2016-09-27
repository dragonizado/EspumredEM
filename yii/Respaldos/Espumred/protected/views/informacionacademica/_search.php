<?php
/* @var $this InformacionacademicaController */
/* @var $model Informacionacademica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	<div>
		<?php echo $form->label($model,'nombreEmpleado'); ?>
		<?php echo $form->textField($model,'nombreEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'escolaridad'); ?>
		<?php echo $form->textField($model,'escolaridad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'primerCurso'); ?>
		<?php echo $form->textField($model,'primerCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'segundoCurso'); ?>
		<?php echo $form->textField($model,'segundoCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tercerCurso'); ?>
		<?php echo $form->textField($model,'tercerCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->