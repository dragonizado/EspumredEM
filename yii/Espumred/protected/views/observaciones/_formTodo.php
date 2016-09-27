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
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=descripcion/create";  
			 
   //          $(this).parent().remove();
 	
});
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
		<?php echo $form->labelEx($model,'cod'); ?>
		<?php echo $form->textField($model,'cod',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cod'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->dropDownList($model,'observaciones',array('ACTIVO'=>'ACTIVO','RETIRADO'=>'RETIRADO'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<?php echo $form->labelEx($model,'firma_asesor'); ?>
			<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->firma_asesor !='') {
                             $value = ($model->firma_asesor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'area', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'area',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listarasesor'),
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


    <div >
		<?php echo $form->labelEx($model,'gerente_comercial'); ?>
		<?php echo $form->textField($model,'gerente_comercial',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'gerente_comercial', 'style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'gerente_comercial'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'gerente_cartera'); ?>
		<?php echo $form->textField($model,'gerente_cartera',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'gerente_cartera', 'style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'gerente_cartera'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'gerente_general'); ?>
		<?php echo $form->textField($model,'gerente_general',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'gerente_general', 'style'=>"text-transform:uppercase;")); ?>
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
	                                    
	                                    <?php echo $form->error($model,'fechautorizacion2'); ?>

	        <div class="buttons col-md-10" align="center">
	        <br>
		   <?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		   <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		  <br><br><br>
	    </div>

      <?php $this->endWidget(); ?>
     </div>
   <div class="col-md-4">
	
  </div>

   </div><!-- form -->