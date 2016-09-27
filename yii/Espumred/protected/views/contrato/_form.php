<?php
/* @var $this ContratoController */
/* @var $model Contrato */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Experiencialaboral/create";  
			 
   //          $(this).parent().remove();
 	
});
 	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=contrato/cargar",
					    function(data) {
					    	console.log(data);
					      var Registro = data;
					      
					        Registros = $.parseJSON(Registro);
			    			document.getElementById("tipoContrato").value=Registros[6]["tipoContrato"];
			    			document.getElementById("Contrato_fechaPrimerContrato").value=Registros[6]["fechaPrimerContrato"];
			    			document.getElementById("Contrato_fechaIngreso").value=Registros[6]["fechaIngreso"];
			    			document.getElementById("Contrato_fechaDeRetiro").value=Registros[6]["fechaDeRetiro"];
			    					    		
			   
			    })

			 }

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contrato-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="col-md-4"></div>
	<div class="col-md-4">

  <?php echo $form->errorSummary($model); ?>

	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div>
 -->
	<div >
		<?php echo $form->labelEx($model,'tipoContrato'); ?>	
		<?php echo $form->dropDownList($model,'tipoContrato',array('Fijo'=>'Fijo','Indefinido'=>'Indefinido','Obra Labor'=>'Obra Labor','Prestacion Servicio'=>'Prestacion Servicio','Aprendizaje'=>'Aprendizaje','Otros'=>'Otros'
			),array('id'=>'tipoContrato','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'tipoContrato'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'fechaPrimerContrato'); ?>
		
		<?php 
	                        if ($model->fechaPrimerContrato != '') {
	                                    $model->fechaPrimerContrato = date('d-m-Y', strtotime($model->fechaPrimerContrato));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaPrimerContrato',
	                                    'value' => $model->fechaPrimerContrato,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaPrimerContrato,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'slide',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        'minDate' => '-100Y', //fecha minima
	                                        'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>





		<?php echo $form->error($model,'fechaPrimerContrato'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'fechaIngreso'); ?>
	
		<?php 
	                        if ($model->fechaIngreso != '') {
	                                    $model->fechaIngreso = date('d-m-Y', strtotime($model->fechaIngreso));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaIngreso',
	                                    'value' => $model->fechaIngreso,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaIngreso,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'slide',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        'minDate' => '-100Y', //fecha minima
	                                        'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>



		<?php echo $form->error($model,'fechaIngreso'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Fecha Terminacion Contrato'); ?>
		

		<?php 
	                        if ($model->fechaDeRetiro != '') {
	                                    $model->fechaDeRetiro = date('d-m-Y', strtotime($model->fechaDeRetiro));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaDeRetiro',
	                                    'value' => $model->fechaDeRetiro,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaDeRetiro,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'slide',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        'minDate' => '-100Y', //fecha minima
	                                        'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		<?php echo $form->error($model,'fechaDeRetiro'); ?>
	</div>

	<div align="center" class="buttons">
		<br>
		<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
		
	</div>

	<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->