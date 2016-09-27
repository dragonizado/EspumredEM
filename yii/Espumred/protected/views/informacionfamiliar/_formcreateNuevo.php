<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */
/* @var $form CActiveForm */
$Registro=Yii::app()->session['Registro'];

?>

<style type="text/css">

	 #agregarAutoComplete{
    background:url(images/iconoboton.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


	 .btnEliminar{
    background:url(images/iconoremove.png);
    background-repeat: no-repeat;
    width: 30px;
    height: 50px;

  }


</style>
<script type="text/javascript" >


//funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#guardar", function (event){
 	event.preventDefault();
 		//alert("hola");
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionfamiliar/createNuevo";  
			 
   //          $(this).parent().remove();
 	
});

 $(document).on("click", "#regresar", function (event){
 	event.preventDefault();
 		//alert("hola");
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionempleado/Actualizar";  
			 
   //          $(this).parent().remove();
 	
});

 //funcion para calcular la edad dependiendo de que fecha elige 
 $(document).on("click","#edad",function(event){
  /* funcion  se activa cuando hay un cambio en el campo sexo*/
   		var fecha=document.getElementById("fechaDeNacimiento").value;
   		//alert(fecha);
     	var fechaActual ="<?php echo date('Y-m-d'); ?>";
     
     	// var fin = fechaActual.getTime() - fecha.getTime();
     	var j=0;
     	var año="";
     	var dia="";
     	var mes="";
     	var añoactual="";
     	var diaactual="";
     	var mesactual="";
		for (var i = fecha.length - 1; i >= 0; i--) {
				if (j<4) {
					 año+=fecha[j];
				}if (j>4){
					if (j<7) {
						mes+=fecha[j];
					};
					 
				}if (j>7) {
					 dia+=fecha[j];
				};
	 	j++;
		};


		j=0;
		for (var i = fechaActual.length - 1; i >= 0; i--) {
				if (j<4) {
					 añoactual+=fechaActual[j];
				}if (j>4){
					if (j<7) {
						mesactual+=fechaActual[j];
					};
					 
				}if (j>7) {
					 diaactual+=fechaActual[j];
				};
	 	j++;
		};
		var restaaños =añoactual-año;
		

		if (mesactual<mes) {
				restaaños--;
		};	
		if (mesactual==mes) {

			if (diaactual<dia) {	
				restaaños--;
			};
		};

		document.getElementById("edad").value=restaaños;

		// var restames =mesactual-mes;
		// var restadia =diaactual-dia;
 	// 	alert(añoactual);
	 // 	alert(mesactual);
	 // 	alert(diaactual);
		
 	// 	alert(año);
	 // 	alert(mes);
	 // 	alert(dia);
	 	
		
     	
     			
   

	});
</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionfamiliar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


	<?php echo $form->errorSummary($model); ?>

<div class="col-md-12">
	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

<div class="col-md-12">
	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'ccEmpleado'); ?>
		<?php echo $form->textField($model,'ccEmpleado',array('size'=>45,'id'=>"cc",'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'ccEmpleado'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'nombreFamiliar'); ?>
		<?php echo $form->textField($model,'nombreFamiliar',array('size'=>45,'id'=>"nombreFamiliar",'maxlength'=>45 ,'class'=>'form-control'  ,'style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'nombreFamiliar'); ?>
	</div>
<div class="col-md-4">
		<?php echo $form->labelEx($model,'parantesco'); ?>
		<?php echo $form->dropDownList($model,'parantesco',array(''=>'','Abuelo (a)'=>'Abuelo (a)','Cuñado (a)'=>'Cuñado (a)',
		  'Esposo (a)'=>'Esposo (a)','Hermano (a)'=>'Hermano (a)','Hijo (a)'=>'Hijo (a)','Hijastro (a)'=>'Hijastro (a)','Padrasto'=>'Padrasto',
		  'Madre'=>'Madre','Madrasta'=>'Madrasta','Novio (a)'=>'Novio (a)','Nieto (a)'=>'Nieto (a)','Nuero (a)'=>'Nuero (a)','Padre'=>'Padre','Primo (a)' => 'Primo (a)',
		 'Sobrino (a)' => 'Sobrino (a)','Suegro (a)'=>'Suegro (a)','Tio (a)'=>'Tio (a)',	
			),array('size'=>1,'maxlength'=>1 ,'id'=>"parantesco",'class'=>'form-control','')); ?>
		<?php echo $form->error($model,'parantesco'); ?>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'fechaDeNacimiento'); ?>
		
		<?php 
	                        if ($model->fechaDeNacimiento != '') {
	                                    $model->fechaDeNacimiento = date('d-m-Y', strtotime($model->fechaDeNacimiento));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaDeNacimiento',
	                                    'value' => $model->fechaDeNacimiento,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'fechaDeNacimiento'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaDeNacimiento,
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
											'yearRange'=>'1920',
	                                       // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>




		<?php echo $form->error($model,'fechaDeNacimiento'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad',array('size'=>45,'maxlength'=>45 ,'id'=>'edad','class'=>'form-control')); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'escolaridad'); ?>
		<?php echo $form->dropDownList($model,'escolaridad',array('NA'=>'NA','Primaria'=>'Primaria',
			'Sin Terminar Primaria'=>'Sin Terminar Primaria','Sin Terminar Secundaria'=>'Sin Terminar Secundaria','Secundaria'=>'Secundaria','Sin terminar Universidad'=>'Sin terminar Universidad','Universitario'=>'Universitario',
			),array('size'=>1,'maxlength'=>1 ,'id'=>'escolaridad','class'=>'form-control')); ?>
		<?php echo $form->error($model,'escolaridad'); ?>
	</div>
	</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'ocupaci&oacute;n'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>45,'maxlength'=>45 ,'id'=>'ocupacion','class'=>'form-control', 'style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'viveConEmpleado'); ?>
		
		<?php echo $form->dropDownList($model,'viveConEmpleado',array(''=>'','Si'=>'Si','No'=>'No'
			
			),array('size'=>1,'maxlength'=>1 ,'id'=>'viveConEmpleado','class'=>'form-control')); ?>
		<?php echo $form->error($model,'viveConEmpleado'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'dependeDelEmpleado'); ?>
		
		<?php echo $form->dropDownList($model,'dependeDelEmpleado',array(''=>'','Si'=>'Si','No'=>'No'
						),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'dependeDelEmpleado')); ?>
		<?php echo $form->error($model,'dependeDelEmpleado'); ?>
		<br>
	</div>

</div>
	

<div class="col-md-12">
	



</div>
	<div align="center" class="buttons">
	<?php echo CHtml::submitButton(' Regresar', array("class"=>"btn btn-primary btn-large" ,"id"=>"regresar")); ?>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?> 
	</div>


</div>


<p id="demo"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->