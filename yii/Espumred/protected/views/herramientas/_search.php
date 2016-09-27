<?php
/* @var $this HerramientasController */
/* @var $model Herramientas */
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
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>
	<div>
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fechaDeCompra'); ?>
		<?php echo $form->textField($model,'fechaDeCompra',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'proveedor'); ?>
		<?php echo $form->textField($model,'proveedor',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fechaDeBaja'); ?>
		<?php echo $form->textField($model,'fechaDeBaja',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'fabricante'); ?>
		<?php echo $form->textField($model,'fabricante',array('size'=>45,'maxlength'=>45,'class'=>'form-control')); ?>
	</div>
	
	<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->