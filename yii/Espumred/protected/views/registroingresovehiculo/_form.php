<?php
/* @var $this RegistroingresovehiculoController */
/* @var $model Registroingresovehiculo */
/* @var $form CActiveForm */
$arrId=Yii::app()->session['id'];
ini_set('date.timezone','America/Bogota'); 
$fecha = date("d/m/Y");
$hora = date("g:i A");

?>

<script type="text/javascript" >
 $(document).ready(function(){
  	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				 $("#element").hide();		 
			 }	
	});

</script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registroingresovehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div>
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$arrId[0])); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'horaingreso'); ?>
		<?php echo $form->textField($model,'horaingreso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$hora)); ?>
		<?php echo $form->error($model,'horaingreso'); ?>
		<br>
		
	</div>

	<div id="element">
	<div>
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$fecha)); ?>
		<?php echo $form->error($model,'fecha'); ?>
		
	</div>

	<div>
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>"Ingreso")); ?>
		<?php echo $form->error($model,'estado'); ?>
		
	</div>

	</div>

	
	<div class="buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->