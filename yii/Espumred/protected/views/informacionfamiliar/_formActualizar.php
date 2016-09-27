<?php
/* @var $this InformacionfamiliarController */
/* @var $model Informacionfamiliar */
/* @var $form CActiveForm */
$Registro=Yii::app()->session['Registro'];
 $arrFamiliar=Yii::app()->session['Familiar'];

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

	mostrarArticulos();

// funcion que inica al darle clic al boton de agregar el cual tiene un icono de ingreso
		function myFunction() {
				  
				  event.preventDefault();
				  var carritoActual;
				  var ccEmpleado= $("#cc").val();
				  var nombreFamiliar= $("#nombreFamiliar").val();
				  var parantesco= $("#parantesco").val();
				  var fechaDeNacimiento = $("#fechaDeNacimiento").val();  
				  var edad= $("#edad").val();
				  var escolaridad= $("#escolaridad").val();
				  var ocupacion= $("#ocupacion").val();
				  var viveConEmpleado = $("#viveConEmpleado").val(); 
				  var dependeDelEmpleado = $("#dependeDelEmpleado").val(); 
				  // alert(ccEmpleado);
				  // alert(nombreFamiliar);
				  // alert(parantesco);
				  // alert(fechaDeNacimiento);
				  // alert(edad);
				  // alert(escolaridad);
				  // alert(ocupacion);
				  // alert(viveConEmpleado);
				  // alert(dependeDelEmpleado);
				  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Informacionfamiliar/agregarFamiliar", {ccEmpleado: ccEmpleado, nombreFamiliar:nombreFamiliar, parantesco: parantesco, fechaDeNacimiento:fechaDeNacimiento,edad: edad, escolaridad:escolaridad, ocupacion: ocupacion, viveConEmpleado:viveConEmpleado, dependeDelEmpleado: dependeDelEmpleado,},
				    function(data) {
				      console.log(data);
				      //var carritoActual = '<?php echo json_encode(Yii::app()->session['Familiar']) ?>';
				        document.getElementById("nombreFamiliar").value="";
				        document.getElementById("parantesco").value="";
				        document.getElementById("fechaDeNacimiento").value="";
				        document.getElementById("edad").value="";
				        document.getElementById("escolaridad").value="";
				        document.getElementById("ocupacion").value="";
				        document.getElementById("viveConEmpleado").value="";
				        document.getElementById("dependeDelEmpleado").value="";
				        
			    })

				// /*este .done se utiliza para llamar ala funcion mostrarArticulo pero la singularidad
				//   del . done es que hace el ingreso de manera inmediata*/
				    .done(mostrarArticulos);

		
		}

//funcion para mostrar en pantalla las referencia familiares que ingreso
		 function mostrarArticulos() {
		    $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Informacionfamiliar/verFamiliar", {},
		      function(data) {
		        valorTotal=0;
		        conole.log(data);
		        var articuloActual = data;
		        var arrArticuloActual = $.parseJSON(articuloActual);
		       // alert(arrArticuloActual);
		        arregloCantidad=arrArticuloActual;
		        console.log(arrArticuloActual);
		        var totalPagarProducto=0;
		        var suma=0;


		        var form = "<form id='formularioCarrito' class='clase' name='formularioCarrito' method='POST' action='#'>";

		        for(var i=0; i< arrArticuloActual.length ;i++){
		                       suma=suma+totalPagarProducto;
		                       form = form+ 
		                       "<div width='100%'>"
		                         + "<div class='col-md-2 col-xs-4'>"+arrArticuloActual[i]["nombreFamiliar"]+"</div>"
		           							 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][3]+"</div>"
		           							 +"<div align='center'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][4]+"</div>"         							 
		           							 +"<div align='right'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][5]+
		           							 "</div>"
		           							 +"<div align='right'  class='col-md-2 col-xs-2'>"+arrArticuloActual[i][6]+
		           							 "</div>"
		           							 +"<div align='right'  class='col-md-1 col-xs-2'>"+arrArticuloActual[i][7]+
		           							 "</div>"
		           							  

		           							  +"<button value='"+arrArticuloActual[i][1]+"' id="
		                           			 +arrArticuloActual[i][1]+" class='btnEliminar btn'></button>" +"</div>";
		                        // +"<div class='col-md-1'><button name='eliminar' class='btnEliminar' ></button><div>"+ 
		       }

		      form = form + "</form>";
		      $("#agregarProductos").html(form);

		    });
		}

//funcion para eliminar las referencia familiares que desean
 $(document).on("click", ".btnEliminar", function (event){
 	event.preventDefault();
 		var idEliminar=this['value'];
			
			 $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=Informacionfamiliar/Actualizar", {idEliminar: idEliminar},
   				 function(data) {
    			  console.log(data);			 
   			 })		 
            $(this).parent().remove();
 	
});
//funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionpersonal/create";  
			 
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
	                                        //'minDate' => '-100Y', //fecha minima
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
	
	<div align="center" class="buttons">
				
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>


</div>


<p id="demo"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->