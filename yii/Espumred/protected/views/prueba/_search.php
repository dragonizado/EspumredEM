<?php
/* @var $this CondicionescomercialesController */
/* @var $model Condicionescomerciales */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
	
	<div >
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;"));?>
	</div>
	<!--div >
		<?php //echo $form->label($model,'sexo'); ?>
		<?php //echo $form->textField($model,'sexo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php //echo $form->label($model,'rh'); ?>
		<?php //echo $form->textField($model,'rh',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php //echo $form->label($model,'estadoCivil'); ?>
		<?php //echo $form->textField($model,'estadoCivil',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php //echo $form->label($model,'tiempoCasado'); ?>
		<?php //echo $form->textField($model,'tiempoCasado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php //echo $form->label($model,'numeroHijos'); ?>
		<?php //echo $form->textField($model,'numeroHijos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

		<div >
		<?php //echo $form->label($model,'municipio'); ?>
		<?php //echo $form->textField($model,'municipio',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php //echo $form->label($model,'claseLibretaMilitar'); ?>
		<?php //echo $form->textField($model,'claseLibretaMilitar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div-->
	
<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->