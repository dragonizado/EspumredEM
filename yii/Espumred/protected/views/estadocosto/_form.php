<?php
/* @var $this EstadocostoController */
/* @var $model Estadocosto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadocosto-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>





<div class="col-md-4"></div>
<div class="col-md-4">	
	<div style="display:none;">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>'01')); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fechaCosto'); ?>
		<?php echo $form->dropDownList($model,'fechaCosto',array(''=>'','ENERO'=>'ENERO',
		  'FEBRERO'=>'FEBRERO','MARZO'=>'MARZO','ABRIL'=>'ABRIL','MAYO'=>'MAYO',
		  'JUNIO'=>'JUNIO','JULIO'=>'JULIO','AGOSTOS'=>'AGOSTOS','SEPTIEMBRE' => 'SEPTIEMBRE',
		 'OCTUMBRE' => 'OCTUMBRE','NOVIEMBRE'=>'NOVIEMBRE','DICIEMBRE'=>'DICIEMBRE',	
			),array('size'=>1,'maxlength'=>1 ,'id'=>"fechaCosto",'class'=>'form-control','')); ?>
		<?php echo $form->error($model,'fechaCosto'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'consecutivo'); ?>
		<?php echo $form->textField($model,'consecutivo',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'consecutivo'); ?>
	</div>

	<br>
	<div align="center" class="buttons">

		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->