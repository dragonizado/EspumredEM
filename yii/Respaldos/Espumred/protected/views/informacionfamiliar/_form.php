<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionfamiliar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>
<div class="col-md-2"></div>
<div class="col-md-8">
	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->
<div class="col-md-12">
	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'ccEmpleado'); ?>
		<?php echo $form->textField($model,'ccEmpleado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$modeloEmpleado[0]['cc'])); ?>
		<?php echo $form->error($model,'ccEmpleado'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'nombreFamiliar'); ?>
		<?php echo $form->textField($model,'nombreFamiliar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombreFamiliar'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'parantesco'); ?>
		<?php echo $form->dropDownList($model,'parantesco',array(''=>'','Abuelo'=>'Abuelo','Abuela'=>'Abuela',
		  'Esposo'=>'Esposo','Esposa'=>'Esposa','Hermano'=>'Hermano','Hermana'=>'Hermana','Hijastro'=>'Hijastro',
		  'Hijastra'=>'Hijastra','Madre'=>'Madre','Novio'=>'Novio','Novia'=>'Novia','Padre'=>'Padre','Primo' => 'Primo',
		  'Prima' => 'Prima','Sobrino' => 'Sobrino','Sobrina' => 'Sobrina','Suegro'=>'Suegro','Suegra'=>'Suegra',
		  'Tio'=>'Tio','Tia'=>'Tia',		
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'parantesco'); ?>
	</div>

</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'fechaDeNacimiento'); ?>
		<?php echo $form->textField($model,'fechaDeNacimiento',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'fechaDeNacimiento'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'escolaridad'); ?>
		<?php echo $form->dropDownList($model,'escolaridad',array(''=>'','Primaria'=>'Primaria','Secundaria'=>'Secundaria',
		  'Universitario'=>'Universitario'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'escolaridad'); ?>
	</div>
	</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'viveConEmpleado'); ?>
		
		<?php echo $form->dropDownList($model,'viveConEmpleado',array(''=>'','Si'=>'Si','No'=>'No'
			
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'viveConEmpleado'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'dependeDelEmpleado'); ?>
		
		<?php echo $form->dropDownList($model,'parantesco',array(''=>'','Si'=>'Si','No'=>'No'
						),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'dependeDelEmpleado'); ?>
		<br>
	</div>
</div>

	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="col-md-2"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->