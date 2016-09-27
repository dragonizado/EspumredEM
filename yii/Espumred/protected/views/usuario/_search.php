<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	<div>
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'CC'); ?>
		<?php echo $form->textField($model,'CC',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'NombreUsuario'); ?>
		<?php echo $form->textField($model,'NombreUsuario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Rol'); ?>
		<?php echo $form->textField($model,'Rol',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Fecha_Modificacion'); ?>
		<?php echo $form->textField($model,'Fecha_Modificacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->