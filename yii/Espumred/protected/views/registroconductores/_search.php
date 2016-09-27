<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->label($model,'cc'); ?>
		<?php echo $form->textField($model,'cc',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	

	<div class="col-md-4">
		<?php echo $form->label($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'afp'); ?>
		<?php echo $form->textField($model,'afp',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'arl'); ?>
		<?php echo $form->textField($model,'arl',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<br><br>
	</div>

		<div class="col-md-4">
				<?php echo $form->label($model,'vigenciaSeguridad'); ?>
				<?php echo $form->textField($model,'vigenciaSeguridad',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			</div>
	
</div>


<div class="buttons" align="center">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
		
	</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->