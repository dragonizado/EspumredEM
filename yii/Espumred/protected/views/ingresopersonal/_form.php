<?php
/* @var $this IngresopersonalController */
/* @var $model Ingresopersonal */
/* @var $form CActiveForm */
	$Usuario=Yii::app()->user->id;
$hora=0;
$minutos=0;
$horario=0;
?>
<script type="text/javascript" >
 $(document).ready(function(){
  	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				 $("#element").hide();		 
			 }

	$(document).on("change","#minuto",function(event){
  	event.preventDefault();
  	document.getElementById("hora").value=$("#horareloj").val()+":"+$("#minuto").val()+" "+$("#horario").val();
  
	});

	$(document).on("change","#horareloj",function(event){
  	event.preventDefault();
  	document.getElementById("hora").value=$("#horareloj").val()+":"+$("#minuto").val()+" "+$("#horario").val();
  
	});

	$(document).on("change","#horario",function(event){
  	event.preventDefault();
  	document.getElementById("hora").value=$("#horareloj").val()+":"+$("#minuto").val()+" "+$("#horario").val();
  
	});

	
	});

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingresopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
<div class="col-md-4">

</div>

<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
	<div>
		<?php echo $form->labelEx($model,'nombre empresa*'); ?>
		<?php echo $form->textField($model,'nombreempresa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombreempresa'); ?>
	</div>


	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'apellidos*'); ?>
		<?php echo $form->textField($model,'apellidos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'apellidos'); ?>
	</div>



		<div>
		<?php echo $form->labelEx($model,'asunto*'); ?>
		<?php echo $form->textField($model,'asunto',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'asunto'); ?>
	</div>

	
	<div>
		<?php echo $form->labelEx($model,'area'); ?>
		<?php echo $form->dropDownList($model,'area',array(' '=>' ','Despachos'=>'Despachos','Gerencia'=>'Gerencia','Talento Humano'=>'Talento Humano',
		'Compras'=>'Compras','Mantenimiento'=>'Mantenimiento','Produccion de Espuma'=>'Produccion de Espuma','Sistemas'=>'Sistemas','SG-SST'=>'SG-SST'),
		array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'pertenencia'); ?>
		<?php echo $form->textArea($model,'pertenencia',array('size'=>200,'maxlength'=>200 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'pertenencia'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('size'=>200,'maxlength'=>200 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'observacion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php 
		 if ($model->fecha != '') {
	                                    $model->fecha = date('d-m-Y', strtotime($model->fecha));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha',
	                                    'value' => $model->fecha,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											//'yearRange'=>'1920',
	                                         'minDate' => '0Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima
	                                     


	                                    ),
	                                ));
	                                    ?>




		<?php echo $form->error($model,'fecha'); ?>

	</div>


	<div>
	
		<?php echo $form->labelEx($model,'hora'); ?>
		
		<div>
				<div class="col-md-4"	>
				<?php echo CHtml::dropDownList('listname', $hora, 
		              array('-'=>'-','1'=>'1','2'=>'2','3'=>'3',
					'4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12'
								),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'horareloj')); ?>
			</div>

			<div class="col-md-4"	>
				<?php echo CHtml::dropDownList('listname', $minutos, 
		              array('-'=>'-','00'=>'00','5'=>'5','10'=>'10','15'=>'15','20'=>'20','25'=>'25','30'=>'30',
		              '35'=>'35','40'=>'40','45'=>'45','50'=>'50','55'=>'55',),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'minuto')); ?>

			</div>

			<div class="col-md-4"	>
				<?php echo CHtml::dropDownList('listname', $horario, 
		              array('AM'=>'AM','PM'=>'PM',),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'horario')); ?>

			</div>

	</div>
	<br><br>
		<?php echo $form->hiddenField($model,'hora',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'hora')); ?>
		<?php echo $form->error($model,'hora'); ?>
		<br>
	</div>

	<div id="element">
		<div>
	
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>'Confirmacion')); ?>
		<?php echo $form->error($model,'estado'); ?>
		
	   </div>


	<div>
	
		<?php echo $form->labelEx($model,'idusuario'); ?>
		<?php echo $form->textField($model,'idusuario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$Usuario)); ?>
		<?php echo $form->error($model,'idusuario'); ?>
		<br>
	</div>

	</div>
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->