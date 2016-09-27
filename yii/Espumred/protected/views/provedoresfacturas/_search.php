<?php
/* @var $this ProvedoresfacturasController */
/* @var $model Provedoresfacturas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-md-4">
	

	<div>
		<?php echo $form->label($model,'nit'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'codigoPago'); ?>
		<?php echo $form->textField($model,'codigoPago',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ciudad'); ?>
		<?php echo $form->textField($model,'ciudad',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	
	<div>
		<?php echo $form->label($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'correoelectronico'); ?>
		<?php echo $form->textField($model,'correoelectronico',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Fecha_Modificacion'); ?>
		<?php echo $form->textField($model,'Fecha_Modificacion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->