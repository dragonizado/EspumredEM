<?php
/* @var $this InformacioneconomicaController */
/* @var $model Informacioneconomica */
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
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'primerIngreso'); ?>
		<?php echo $form->textField($model,'primerIngreso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'segundoIngreso'); ?>
		<?php echo $form->textField($model,'segundoIngreso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'otrosIngresos'); ?>
		<?php echo $form->textField($model,'otrosIngresos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'totalIngresos'); ?>
		<?php echo $form->textField($model,'totalIngresos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'arriendo'); ?>
		<?php echo $form->textField($model,'arriendo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'serviciosPublicos'); ?>
		<?php echo $form->textField($model,'serviciosPublicos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'internet'); ?>
		<?php echo $form->textField($model,'internet',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'telefonia'); ?>
		<?php echo $form->textField($model,'telefonia',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'cable'); ?>
		<?php echo $form->textField($model,'cable',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'alimentacion'); ?>
		<?php echo $form->textField($model,'alimentacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'transporte'); ?>
		<?php echo $form->textField($model,'transporte',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'educacion'); ?>
		<?php echo $form->textField($model,'educacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'vehiculo'); ?>
		<?php echo $form->textField($model,'vehiculo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'prestacionesComercial'); ?>
		<?php echo $form->textField($model,'prestacionesComercial',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'prestamosBancario'); ?>
		<?php echo $form->textField($model,'prestamosBancario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'hipoteca'); ?>
		<?php echo $form->textField($model,'hipoteca',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'vestidoYCalzado'); ?>
		<?php echo $form->textField($model,'vestidoYCalzado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div >
		<?php echo $form->label($model,'recreacion'); ?>
		<?php echo $form->textField($model,'recreacion',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<br>
	<div class="buttons">
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
	</div>
</div>


<?php $this->endWidget(); ?>

</div><!-- search-form -->