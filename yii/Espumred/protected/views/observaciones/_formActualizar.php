<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */
/* @var $form CActiveForm */

// este es el registro de informacion personal  ($Registro[0]);
// este es el registro de informacion academica  ($Registro[1]);
// este es el registro de informacion estudiante  ($Registro[2]);
// este es el registro de seguridad social  ($Registro[3]);
// este es el registro de informacion vivienda  ($Registro[4]);
// este es el registro de informacion economica  ($Registro[6]);
// $Registro=Yii::app()->session['Registro']; 
// var_dump($Registro[7]);
?>
<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#actualizar", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Observaciones/update";  
			 
   //          $(this).parent().remove();
 	
});
  $(document).on("change", "#estado", function (event){
 	event.preventDefault();
 	
 		var retiro=$("#estado").val();
 		if (retiro=="Activo") {

 			$("#motivoRetiro").hide();
        }else{
			$("#motivoRetiro").show();

 		};

   //          $(this).parent().remove();
 	
});

  	window.onload = cargar;
	
	function cargar() {
				  
				  event.preventDefault();
				  var retiro=$("#estado").val();
				 
				  if (retiro=="ACTIVO") {

			 			$("#motivoRetiro").hide();
			        }else{
						$("#motivoRetiro").show();

			 		};
		}
		

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'observaciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>

<div class="col-md-4"></div>
<div class="col-md-4">
	

	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

	
	<div >
		<?php echo $form->labelEx($model,'Observaciones'); ?>
		<?php echo $form->textArea($model,'observaciones',array('size'=>900,'maxlength'=>900 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>
 
 <div>
 
    <div >
		<?php echo $form->labelEx($model,'Firma Asesor'); ?>
		<?php echo $form->textField($model,'firma_asesor',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'firma_asesor'); ?>
	</div>

	
    <div >
		<?php echo $form->labelEx($model,'Gerente Comercial'); ?>
		<?php echo $form->textField($model,'gerente_comercial',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'gerente_comercial'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Gerente Cartera'); ?>
		<?php echo $form->textField($model,'gerente_cartera',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'gerente_cartera'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'Gerente General'); ?>
		<?php echo $form->textField($model,'gerente_general',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'gerente_general'); ?>
	</div>



        <?php echo $form->labelEx($model,'fechautorizacion'); ?>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fechautorizacion != '') {
	                                    $model->fechautorizacion = date('d-m-Y', strtotime($model->fechautorizacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechautorizacion',
	                                    'value' => $model->fechautorizacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechautorizacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
	                                    <?php echo $form->error($model,'fechautorizacion'); ?>
	                       <div>



	        <?php echo $form->labelEx($model,'fechautorizacion1'); ?>
			     <?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fechautorizacion != '') {
	                                    $model->fechautorizacion1 = date('d-m-Y', strtotime($model->fechautorizacion1));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechautorizacion1',
	                                    'value' => $model->fechautorizacion1,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechautorizacion1,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
	                                    <?php echo $form->error($model,'fechautorizacion1'); ?>
	                              <div>



	                 <?php echo $form->labelEx($model,'fechautorizacion2'); ?>
			                <?php 
			                /*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fechautorizacion != '') {
	                                    $model->fechautorizacion2 = date('d-m-Y', strtotime($model->fechautorizacion2));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechautorizacion2',
	                                    'value' => $model->fechautorizacion2,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechautorizacion2,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),

	                                  ));
	                                    ?>
	                                    
	                                    <?php echo $form->error($model,'fechautorizacion2'); ?>


	<div class="buttons col-md-10" align="center">
	<br>
	 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		
		 <br><br><br>
	</div>

<?php $this->endWidget(); ?>
</div>
<div class="col-md-4">
	
</div>

</div><!-- form -->