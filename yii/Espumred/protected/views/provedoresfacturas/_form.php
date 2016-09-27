<?php
/* @var $this ProvedoresfacturasController */
/* @var $model Provedoresfacturas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'provedoresfacturas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-3"></div>
<div class="col-md-6">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nit*'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'nombre*'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'codigoPago*'); ?>
		<?php echo $form->textField($model,'codigoPago',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codigoPago'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'ciudad*'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ciudad'); ?>
	</div>

	<!-- <div class="col-md-6">
		<?php //echo $form->labelEx($model,'nit'); ?>
		<?php //echo $form->textField($model,'nit',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'nit'); ?>
	</div> -->

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'direccion*'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'telefono*'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="col-md-6">
		<?php echo $form->labelEx($model,'fax*'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'correoelectronico*'); ?>
		<?php echo $form->textField($model,'correoelectronico',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'correoelectronico'); ?>
		<br><br>
	</div>

	<!-- <div>
		<?php //echo $form->labelEx($model,'Fecha_Creacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Creacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Creacion'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'Fecha_Modificacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Modificacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Modificacion'); ?>
	</div> -->

	
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
</div>
<div class="col-md-3"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->