<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'repuestos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fechaDeCompra'); ?>
		<?php echo $form->textField($model,'fechaDeCompra',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fechaDeCompra'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'proveedor'); ?>
		<?php echo $form->textField($model,'proveedor',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'proveedor'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fechaDeBaja'); ?>
		<?php echo $form->textField($model,'fechaDeBaja',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fechaDeBaja'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fabricante'); ?>
		<?php echo $form->textField($model,'fabricante',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fabricante'); ?>
	</div>

	<br>
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->