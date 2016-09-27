<?php
/* @var $this DescargoespumasController */
/* @var $model Descargoespumas */
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
		<?php echo $form->label($model,'CantidadConsumida'); ?>
		<?php echo $form->textField($model,'cantidadConsumida',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div>
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>


<div>
		<?php echo $form->label($model,'consecutivo'); ?>
		<?php echo $form->textField($model,'consecutivo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>


<br>
	<div class=" buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->