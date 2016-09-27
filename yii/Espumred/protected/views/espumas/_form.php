<?php
/* @var $this EspumasController */
/* @var $model Espumas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'espumas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="col-md-4"></div>
<div class="col-md-4">

	<?php echo $form->errorSummary($model); ?>
	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>


	<div>
		<?php echo $form->labelEx($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'tipo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ancho'); ?>
		<?php echo $form->textField($model,'ancho',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ancho'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'largo'); ?>
		<?php echo $form->textField($model,'largo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'largo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'alto'); ?>
		<?php echo $form->textField($model,'alto',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'alto'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'densidad'); ?>
		<?php echo $form->textField($model,'densidad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control'));?>
		<?php echo $form->error($model,'densidad'); ?>
	</div>

	<div align="center" class="buttons">
	<br>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br><br><br>
	</div>

</div>

<div class="col-md-4"></div>
<?php $this->endWidget(); ?>
</div><!-- form -->