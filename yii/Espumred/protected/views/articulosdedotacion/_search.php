<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
 <div class="col-md-4">

	<div >
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div >
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div >
		<?php echo $form->label($model,'tipoDotacion'); ?>
		<?php echo $form->textField($model,'tipoDotacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<br>
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->