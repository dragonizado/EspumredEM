<?php




?>

<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#siguiente", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicion/_formTodo";  
			

});


$(document).on("click","#cod",function(event){
			event.preventDefault();
			
            document.getElementById("cod").value=$("#Condicionescomerciales_nombreCliente").val();

       });

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'condicionescomerciales-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



   <?php echo $form->errorSummary($model); ?>

   <div class="col-md-3"></div>
      <div class="col-md-6">
	<p class="note">Los campos con <span class="required">*</span> son requeridos</p>



     <div class="col-md-12">
		 <div class="col-md-4" >		  
		 <?php echo $form->labelEx($model,'Codigo*'); ?>
		 <?php echo $form->textField($model,'cod' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod', )); ?>
		 <?php echo $form->error($model,'cod'); ?>



	</div>  


    <div class="col-md-5">
		<?php echo $form->labelEx($model,'NombreCliente*'); ?>
		<?php //echo $form->textField($model,'provedor',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->nombreCliente !='') {
                             $value = ($model->nombreCliente);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model,'nombreCliente', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'nombreCliente',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarClientes'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Condicionescomerciales_nombreCliente").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Condicionescomerciales_nombreCliente").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'nombreCliente'); ?>
	</div>
    
	 
    
	<div class="col-md-5">
		<?php echo $form->labelEx($model,'nombreAsesor'); ?>
	   	<?php echo $form->textField($model,'nombreAsesor' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'nombreAsesor', )); ?>
		<?php echo $form->error($model,'nombreAsesor'); ?>
	</div>


    						
	<div class="col-md-8">
		<?php echo $form->labelEx($model,'TipologiaCliente'); ?>
		<?php echo $form->textField($model,'TipologiaCliente' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'TipologiaCliente', )); ?>
		<?php echo $form->error($model,'TipologiaCliente'); ?>
    </div>


	</div>
    
   
	<div class="col-md-12">
	    <div class="col-md-4">
			<?php echo $form->labelEx($model,'vigenciadesde* '); ?><br>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->vigenciadesde != '') {
	                                    $model->vigenciadesde = date('d-m-Y', strtotime($model->vigenciadesde));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'vigenciadesde',
	                                    'value' => $model->vigenciadesde,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->vigenciadesde,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'2016',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                     ),
	                                   ));

									   
	                                 ?>
	                                  <?php echo $form->error($model,'vigenciadesde'); ?>


		                                 </div>
		                          </div>
									

	<div class="col-md-12">
	<div class="col-md-4">
			   <?php echo $form->labelEx($model,'vigenciahasta* '); ?>
			   <?php 
			  /*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->vigenciahasta != '') {
	                                    $model->vigenciahasta = date('d-m-Y', strtotime($model->vigenciahasta));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'vigenciahasta',
	                                    'value' => $model->vigenciahasta,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->vigenciahasta,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima
	                                    ),
	                                ));
									
	                                    ?>
	                                    <?php echo $form->error($model,'vigenciahasta'); ?>
	                                </div>


    <div class="col-md-3">
		<?php echo $form->labelEx($model,'Cambio*'); ?>
	   	<center><?php echo $form->checkbox($model,'Cambio' ,array('size'=>0,'maxlength'=>2 ,'class'=>'form-control','id'=>'Cambio', )); ?><center>
		<?php echo $form->error($model,'Cambio'); ?>
	</div>        
             


    <div class="col-md-4">
		<?php echo $form->labelEx($model,'NegPuntual*'); ?>
	   	<center><?php echo $form->checkbox($model,'negPuntual' ,array('size'=>0,'maxlength'=>2 ,'class'=>'form-control','id'=>'negPuntual', )); ?><center>
		<?php echo $form->error($model,'nnegPuntual'); ?>
	</div>
               

               
	  <div class="buttons col-md-10" align="center">
	
	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Siguiente', array("class"=>"btn btn-primary btn-large")); ?>
		<br><br>
	  </div>
  </div>
 <div class="col-md-3"></div>
 <?php $this->endWidget(); ?>

 </div><!-- form -->