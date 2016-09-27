<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<div class="col-md-4">

	<div >
		<?php echo $form->label($model,'idCliente'); ?>
		<?php echo $form->textField($model,'idCliente',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'idUsuario'); ?>
		<?php echo $form->textField($model,'idUsuario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Ciudad'); ?>
		<?php echo $form->textField($model,'Ciudad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	
	<div >
		<?php echo $form->label($model,'Numero_Factura'); ?>
		<?php echo $form->textField($model,'Numero_Factura',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
	

	<div >
		<?php echo $form->label($model,'consecutivo'); ?>
		<?php echo $form->textField($model,'consecutivo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->

