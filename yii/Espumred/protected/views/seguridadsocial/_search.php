<?php
/* @var $this SeguridadsocialController */
/* @var $model Seguridadsocial */
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
		<?php echo $form->label($model,'censantias'); ?>
		<?php echo $form->textField($model,'censantias',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'afp'); ?>
		<?php echo $form->textField($model,'afp',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->