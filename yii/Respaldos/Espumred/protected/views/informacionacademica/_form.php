<?php
/* @var $this InformacionacademicaController */
/* @var $model Informacionacademica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionacademica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
 <div class="col-md-3"></div>
 <div class="col-md-6">
  <div class="col-md-12">
	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'nombreEmpleado'); ?>
		<?php echo $form->textField($model,'nombreEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombreEmpleado'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'escolaridad'); ?>
		<?php echo $form->dropDownList($model,'escolaridad',array(''=>'','Primaria'=>'Primaria','Secundaria'=>'Secundaria',
		  'Universitario'=>'Universitario'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'escolaridad'); ?>
	</div>
</div>
 <div class="col-md-12">
	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'tituloObtenido'); ?>
		<?php echo $form->textField($model,'tituloObtenido',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tituloObtenido'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'institucion'); ?>
		<?php echo $form->textField($model,'institucion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'institucion'); ?>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-12">
		<?php echo $form->labelEx($model,'primerCurso'); ?>
		<?php echo $form->textField($model,'primerCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'primerCurso'); ?>
	</div>

	<div class="col-md-12">
		<?php echo $form->labelEx($model,'segundoCurso'); ?>
		<?php echo $form->textField($model,'segundoCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'segundoCurso'); ?>
	</div>

	<div class="col-md-12">
		<?php echo $form->labelEx($model,'tercerCurso'); ?>
		<?php echo $form->textField($model,'tercerCurso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tercerCurso'); ?>
		<br>
	</div>
</div>
	
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="col-md-3"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->