<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productocostos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'codsap*'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'medidas'); ?>
		<?php echo $form->textField($model,'medidas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'medidas'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'calibre'); ?>
		<?php echo $form->textField($model,'calibre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'calibre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precioMayoristas'); ?>
		<?php echo $form->textField($model,'precioMayoristas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'precioMayoristas'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precioCorreria'); ?>
		<?php echo $form->textField($model,'precioCorreria',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'precioCorreria'); ?>
		<br>
	</div>

	<div class="buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->