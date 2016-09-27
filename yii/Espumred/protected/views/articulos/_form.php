<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articulos-form',
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
		<?php echo $form->labelEx($model,'Nombre_Articulo'); ?>
		<?php echo $form->textField($model,'Nombre_Articulo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Nombre_Articulo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Descripcion'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Valor'); ?>
	</div>
<br>
	<div class="buttons" align="center">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br>
	</div>

</div>
<?php $this->endWidget(); ?>

<div class="col-md-4"></div>

</div><!-- form -->