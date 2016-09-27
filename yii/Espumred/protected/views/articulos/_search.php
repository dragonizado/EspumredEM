<?php
/* @var $this ArticulosController */
/* @var $model Articulos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-4">
<!-- 	<div class="row">
		<?php //echo $form->label($model,'id'); ?>
		<?php// echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
	</div>
 -->
	<div >
		<?php echo $form->label($model,'Nombre_Articulo'); ?>
		<?php echo $form->textField($model,'Nombre_Articulo',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'Descripcion'); ?>
		<?php echo $form->textField($model,'Descripcion',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Valor'); ?>
		<?php echo $form->textField($model,'Valor',array('size'=>45,'maxlength'=>45, 'class'=>'form-control')); ?>
	</div>
	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->