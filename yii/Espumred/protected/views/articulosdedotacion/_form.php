<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulosdedotacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
	<div class="col-md-4">
		


	<?php echo $form->errorSummary($model); ?>

	<div >
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45, 'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'tipoDotacion'); ?>
		<?php echo $form->textField($model,'tipoDotacion',array('size'=>45,'maxlength'=>45, 'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'tipoDotacion'); ?>
	</div>

	<div align="center"class="row buttons">
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	</div>
	<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->