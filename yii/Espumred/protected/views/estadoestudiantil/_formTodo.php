<?php
/* @var $this EstadoestudiantilController */
/* @var $model Estadoestudiantil */
/* @var $form CActiveForm */
$Registro=Yii::app()->session['Registro']; 

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'estadoestudiantil-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<script type="text/javascript" >
//funcion para mostrar campos si esta estudiando actualmente y si no esconderlo
  $(document).on("click", "#estadoEstudiante", function (event){
 	event.preventDefault();
 	var desicion=this['value'];
 	if (desicion=="Si") {
 		$("#element").show();
 	};
 	if (desicion=="No") {
 		$("#element").hide();
 	};
 	
 


 	
});
  	window.onload = cargarPagina;//cargar la primera funcion

	function cargarPagina() {//funcio para cargar pagina cuando se devuelve
		  event.preventDefault();
				
				  	
				  var Registros
				   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=estadoestudiantil/cargar",
					    function(data) {
					    	console.log(data);
					      var Registro = data;
					      var index
					        Registros = $.parseJSON(Registro);
					     	
					        var desicion=(document.getElementById("estadoEstudiante").value=Registros[2]["estadoEstudiante"]);

						 	if (desicion=="Si") {
						 		$("#element").show();
						 		document.getElementById("tituloCarrera").value=Registros[2]["tituloCarrera"];
					     		document.getElementById("semestreActual").value=Registros[2]["semestreActual"];
					     		document.getElementById("Estadoestudiantil_FechaTerminacion").value=Registros[2]["FechaTerminacion"];

					     		
						 	};
						 	if (desicion=="No") {
						 		$("#element").hide();
						 	};
				        
			    })

			 }
  //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionacademica/create";  
			 
   //          $(this).parent().remove();
 	
});
</script>

	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-4"></div>
<div class="col-md-4">
	

	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->
	<div>
		<?php echo $form->labelEx($model,'Estudia Actualmente'); ?>
		
		<?php echo $form->dropDownList($model,'estadoEstudiante',array(''=>'','Si'=>'Si','No'=>'No',
			),array('size'=>1,'maxlength'=>1 ,'id'=>'estadoEstudiante','class'=>'form-control')); ?>
		<?php echo $form->error($model,'estadoEstudiante'); ?>
	</div>

	<div id="element" style="display: none">
		

		<div  >
			<?php echo $form->labelEx($model,'tituloCarrera'); ?>
			<?php echo $form->textField($model,'tituloCarrera',array('id'=>'tituloCarrera','size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
			<?php echo $form->error($model,'tituloCarrera'); ?>
		</div>

		<div >
			<?php echo $form->labelEx($model,'semestreActual'); ?>
			<?php echo $form->textField($model,'semestreActual',array('id'=>'semestreActual','size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
			<?php echo $form->error($model,'semestreActual'); ?>
		</div>

		<div >
			<?php echo $form->labelEx($model,'FechaTerminacion'); ?>
			
			<?php //de esta forma se crea un calendario para que sea mas agradable para el cliente
		                        if ($model->FechaTerminacion != '') {
		                                    $model->FechaTerminacion = date('d-m-Y', strtotime($model->FechaTerminacion));
		                                }
		                          //forma de mostrar un calendario mas elegante en el formulario.
		                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		                                    'model' => $model,
		                                    'attribute' => 'FechaTerminacion',
		                                    'value' => $model->FechaTerminacion,
		                                    'language' => 'es',
		                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
		                                    'options' => array(
		                                        'autoSize' => true,
		                                        'defaultDate' => $model->FechaTerminacion,
		                                        'dateFormat' => 'yy-mm-dd',
		                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
		                                        'buttonImageOnly' => false,
		                                        'buttonText' => 'Fecha',
		                                        'selectOtherMonths' => true,
		                                        'showAnim' => 'slide',
		                                        'showButtonPanel' => true,
		                                        'showOn' => 'button',
		                                        'showOtherMonths' => true,
		                                        'changeMonth' => 'true',
		                                        'changeYear' => 'true',
												//'yearRange'=>'1920',
		                                        'minDate' => '-100Y', //fecha minima
		                                        'maxDate' => "+20Y",//fecha maxima

		                                    ),
		                                ));
		                                    ?>
			<?php echo $form->error($model,'FechaTerminacion'); ?>
		</div>
	</div>
	<div align="center" class="buttons">
		<br>
		
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Siguiente >>', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->