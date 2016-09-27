<?php
/* @var $this AreaController */
/* @var $model Area */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'area-form',
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
		<?php echo $form->labelEx($model,'Nombre del Area'); ?>
		<?php echo $form->textField($model,'nombreArea',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'nombreArea'); ?>
	</div>

	
	<div align="center" class="buttons">
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		
	</div>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->