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
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=dotacion/create";  
			 
   //          $(this).parent().remove();
 	
});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionempleado-form',
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
		<?php echo $form->labelEx($model,'codigoNomina'); ?>
		<?php echo $form->textField($model,'codigoNomina',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'codigoNomina'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->dropDownList($model,'estado',array('ACTIVO'=>'ACTIVO','RETIRADO'=>'RETIRADO'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>
	<div >
		<?php echo $form->labelEx($model,'numeroCuenta'); ?>
		<?php echo $form->textField($model,'numeroCuenta',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'numeroCuenta', 'style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'numeroCuenta'); ?>
	</div>
	<div >
		<?php echo $form->labelEx($model,'carnet'); ?>
		<?php echo $form->dropDownList($model,'carnet',array('Si'=>'Si','No'=>'No'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'carnet'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'area'); ?>
			<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->area !='') {
                             $value = ($model->area);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'area', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'area',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listararea'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionempleado_area").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionempleado_area").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'cargo'); ?>
				<?php /*este metodo de abajo funciona para buscar todos los cargos los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->cargo !='') {
                             $value = ($model->cargo);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'cargo', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'cargo',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listarcargo'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionempleado_cargo").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionempleado_cargo").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>


<div id="element" style="display: none">
	<div >
			<?php echo $form->labelEx($model,'fechaFinalizacionRetiro'); ?>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fechaFinalizacionRetiro != '') {
	                                    $model->fechaFinalizacionRetiro = date('d-m-Y', strtotime($model->fechaFinalizacionRetiro));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaFinalizacionRetiro',
	                                    'value' => $model->fechaFinalizacionRetiro,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaFinalizacionRetiro,
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
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
	                                    <?php echo $form->error($model,'fechaFinalizacionRetiro'); ?>
		</div>
	<div >
		<?php echo $form->labelEx($model,'InformacionEconomica'); ?>
		<?php echo $form->textField($model,'InformacionEconomica',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'InformacionEconomica'); ?>
	</div>
	
	<div >
		<?php echo $form->labelEx($model,'informacionAcademica'); ?>
		<?php echo $form->textField($model,'informacionAcademica',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'informacionAcademica'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'informacionPersonal'); ?>
		<?php echo $form->textField($model,'informacionPersonal',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'informacionPersonal'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'informacionFamiliar'); ?>
		<?php echo $form->textField($model,'informacionFamiliar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'informacionFamiliar'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'InformacionVivienda'); ?>
		<?php echo $form->textField($model,'InformacionVivienda',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'InformacionVivienda'); ?>
	</div>
<div >
		<?php echo $form->labelEx($model,'motivoRetiro'); ?>
		<?php echo $form->textField($model,'motivoRetiro',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'motivoRetiro'); ?>
	</div>
	

	<div >
		<?php echo $form->labelEx($model,'estadoEstudiantil'); ?>
		<?php echo $form->textField($model,'estadoEstudiantil',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'estadoEstudiantil'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'seguridadSocial'); ?>
		<?php echo $form->textField($model,'seguridadSocial',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'seguridadSocial'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'contrato'); ?>
		<?php echo $form->textField($model,'contrato',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contrato'); ?>
	</div>
</div>
	<div >
		<?php echo $form->labelEx($model,'vehiculo'); ?>
		<?php echo $form->dropDownList($model,'vehiculo',array('No'=>'No','Carro'=>'Carro','Moto'=>'Moto','Carro y Moto'=>'Carro y Moto'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'vehiculo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'contactoEmergencia'); ?>
		<?php echo $form->textField($model,'contactoEmergencia',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'contactoEmergencia'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'telefonoContacto'); ?>
		<?php echo $form->textField($model,'telefonoContacto',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefonoContacto'); ?>
	</div>

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