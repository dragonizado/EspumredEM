<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */

    $UploadFormModel = new UploadFormFactura;

    $id=Yii::app()->user->id;
    $factura=Facturacion::model()->findAll();
    $factura=count($factura)+2;
    var_dump($factura);
    $UploadFormModel->id = $factura;
 
?>

<script type="text/javascript" >
//funcion para mostrar campos si esta estudiando actualmente y si no esconderlo
  $(document).on("click", "#upload", function (event){
 	event.preventDefault();
 	alert("hola");
 	// var desicion=this['value'];
 	// if (desicion=="Activo") {
 	// 	$("#element").hide();
 	// };
 	// if (desicion=="Retirado") {
 	// 	$("#element").show();
 	// };
 	
 	
});


		$(document).on("click","#nombre",function(event){
			event.preventDefault();
			
            document.getElementById("nombre").value=$("#Facturacion_provedor").val();

		});
  </script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facturacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>




<div class="col-md-12">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>




	<div class="col-md-4">
		<?php echo $form->labelEx($model,'provedor*'); ?>
		<?php //echo $form->textField($model,'provedor',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->labelEx($model,'nit'); ?>
		<?php //echo $form->textField($model,'provedor',array()); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->provedor !='') {
                             $value = ($model->provedor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'provedor', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'provedor',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarProveedor'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'provedor'); ?>
	</div>


	<div class="col-md-4">
		<?php echo $form->labelEx($model,'Nombre*'); ?>
		<?php echo CHtml::textField('Nombre','', array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'nombre')); ?>
		
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'numeroFactura*'); ?>
		<?php echo $form->textField($model,'numeroFactura',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'numeroFactura'); ?>
	</div>


	<div class="col-md-4">
		<?php echo $form->labelEx($model,'valorFactura*'); ?>
		<?php echo $form->textField($model,'valorFactura',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'valorFactura'); ?>
	</div>


<?php if (Yii::app()->user->rol=='facturaGeneral'||Yii::app()->user->rol=='factura'||Yii::app()->user->rol=='recepcion'): ?>
	

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'Fecha Vencimiento*'); ?>
		<?php 
	                        if ($model->Fecha_Vencimiento != '') {
	                                    $model->Fecha_Vencimiento = date('d-m-Y', strtotime($model->Fecha_Vencimiento));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'Fecha_Vencimiento',
	                                    'value' => $model->Fecha_Vencimiento,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'Fecha_Vencimiento'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->Fecha_Vencimiento,
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
											// 'yearRange'=>'1920',
	                                        'minDate' => '0Y', //fecha minima
	                                        //'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>

		
		<?php echo $form->error($model,'Fecha_Vencimiento'); ?>
	</div>

<?php endif ?>

<?php if (Yii::app()->user->rol=='AdminfacturaGeneral'): ?>
	

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'Fecha Vencimiento*'); ?>
		<?php 
	                        if ($model->Fecha_Vencimiento != '') {
	                                    $model->Fecha_Vencimiento = date('d-m-Y', strtotime($model->Fecha_Vencimiento));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'Fecha_Vencimiento',
	                                    'value' => $model->Fecha_Vencimiento,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'Fecha_Vencimiento'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->Fecha_Vencimiento,
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
											// 'yearRange'=>'1920',
	                                        //'minDate' => '1Y', //fecha minima
	                                        'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>

		
		<?php echo $form->error($model,'Fecha_Vencimiento'); ?>
	</div>

<?php endif ?>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'responsable aprobacion*'); ?>
		<?php echo $form->dropDownList($model,'correoelectronico',array(''=>'','sistemas@espumasmedellin.com'=>'Carlos Andres Trujillo','contador2@espumasmedellin.com'=>'Tomas Villega'
			,'asistente.contabilidad@espumasmedellin.com'=>'Diego Duque','gerente.administrativo@espumasmedellin.com'=>'René Morales','practicante.sistemas@espumasmedellin.com'=>'Ninguno'
			),array('id'=>'escolaridad','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		
		<?php echo $form->error($model,'correoelectronico'); ?>
		<br>
	<br>
	</div>


	<div style="display:none">
				
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'consecutivo'); ?>
					<?php echo $form->textField($model,'consecutivo',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$factura)); ?>
					<?php echo $form->error($model,'consecutivo'); ?>
				</div>

				<div class="col-md-4">
					<?php echo $form->labelEx($model,'idUsuario'); ?>
					<?php echo $form->textField($model,'idUsuario',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$id )); ?>
					<?php echo $form->error($model,'idUsuario'); ?>
				</div>
				
			 	<div class="col-md-6">
					<?php echo $form->labelEx($model,'estado'); ?>

					<?php echo $form->textField($model,'estado',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>"Recibido")); ?>
					<?php echo $form->error($model,'estado'); ?>
				</div>

	</div>

	<div>
		<?php echo $form->labelEx($model,'Observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array( 'size'=>900,'maxlength'=>900 ,'class'=>'form-control', 'rows'=>6, 'width'=>100)); ?>
		<?php echo $form->error($model,'observacion'); ?>
			<br><br>
	</div>

	<!-- <div class="col-md-4">
		<?php //echo $form->labelEx($model,'Fecha_Creacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Creacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Creacion'); ?>
	</div>

	<div class="col-md-4">
		<?php //echo $form->labelEx($model,'Fecha_Modificacion'); ?>
		<?php //echo $form->textField($model,'Fecha_Modificacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'Fecha_Modificacion'); ?>
		<br>
	</div> -->



<div align="center" class="buttons">

		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
<?php $this->endWidget(); ?>
</div>
</div><!-- form -->

	