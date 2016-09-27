<?php
/* @var $this EspumasController */
/* @var $model Espumas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	<div>
		<?php echo $form->label($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'ancho'); ?>
		<?php echo $form->textField($model,'ancho',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'largo'); ?>
		<?php echo $form->textField($model,'largo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'alto'); ?>
		<?php echo $form->textField($model,'alto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'densidad'); ?>
		<?php echo $form->textField($model,'densidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="buttons">
		<br>
		<?php echo CHtml::submitButton('Buscar',array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->