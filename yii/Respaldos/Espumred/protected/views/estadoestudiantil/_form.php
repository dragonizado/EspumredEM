<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadoestudiantil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-4"></div>
<div class="col-md-4">
	

	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

	<div >
		<?php echo $form->labelEx($model,'tituloCarrera'); ?>
		<?php echo $form->textField($model,'tituloCarrera',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tituloCarrera'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'semestreActual'); ?>
		<?php echo $form->textField($model,'semestreActual',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'semestreActual'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'FechaTerminacion'); ?>
		<?php echo $form->textField($model,'FechaTerminacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'FechaTerminacion'); ?>
	</div>

	<div align="center" class="buttons">
		<br>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->