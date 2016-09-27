<?php
/* @var $this DescargoespumasController */
/* @var $model Descargoespumas */
/* @var $form CActiveForm */

?>
<script type="text/javascript">
	
	$(document).ready(function() {
		var con=1;
		limpiarCampos();
		   

	$('input').bind("enterKey",function(e){
		event.preventDefault();
		// document.getElementById("sexo").value=Registro[0]["sexo"];
		// document.getElementById("sexo").
		
		if (con<11) {
			var id=this.id;
			var colum="#id"+con;
			var focus=id.substr(0,15)+con;
			$(colum).show();
			document.getElementById(focus).focus();
			$("#cantidadConsumida1").prop( "disabled", false );	
			con++;

		}else{
			
		};
		

	});
	$('input').keyup(function(e){
		event.preventDefault();
		if(e.keyCode == 13)
		{
		  $(this).trigger("enterKey");
		  
		}
	});

	 function limpiarCampos() {
	 	 document.getElementById("idCargarespumas1").value=" ";
		  document.getElementById("idCargarespumas2").value=" ";
		  document.getElementById("idCargarespumas3").value=" ";
		  document.getElementById("idCargarespumas4").value=" ";
		  document.getElementById("idCargarespumas5").value=" ";
		  document.getElementById("idCargarespumas6").value=" ";
		  document.getElementById("idCargarespumas7").value=" ";
		  document.getElementById("idCargarespumas8").value=" ";
		  document.getElementById("idCargarespumas9").value=" ";
		  document.getElementById("idCargarespumas10").value=" ";
		  document.getElementById("consecutivo").value=" ";

	 }





		 $(document).on("click", "#cantidadConsumida1", function (event){
		 	event.preventDefault();
		 	$("#idCargarespumas1").prop( "disabled", true );
		 	$("#idCargarespumas2").prop( "disabled", true );
		 	$("#idCargarespumas3").prop( "disabled", true );
		 	$("#idCargarespumas4").prop( "disabled", true );
		 	$("#idCargarespumas5").prop( "disabled", true );
		 	$("#idCargarespumas6").prop( "disabled", true );
		 	$("#idCargarespumas7").prop( "disabled", true );
		 	$("#idCargarespumas8").prop( "disabled", true );
		 	$("#idCargarespumas9").prop( "disabled", true );
		 	$("#idCargarespumas10").prop( "disabled", true );
		 	$("#cantidadConsumida1").prop( "disabled", false );
		 	$("#cantidadConsumida2").prop( "disabled", false );
		 	$("#cantidadConsumida3").prop( "disabled", false );
		 	$("#cantidadConsumida4").prop( "disabled", false );
		 	$("#cantidadConsumida5").prop( "disabled", false );
		 	$("#cantidadConsumida6").prop( "disabled", false );
		 	$("#cantidadConsumida7").prop( "disabled", false );
		 	$("#cantidadConsumida8").prop( "disabled", false );
		 	$("#cantidadConsumida9").prop( "disabled", false );
		 	$("#cantidadConsumida10").prop( "disabled", false );
		 	var idCargarespumas1 =document.getElementById("idCargarespumas1").value;
		 	var idCargarespumas2 =document.getElementById("idCargarespumas2").value;
		 	var idCargarespumas3 =document.getElementById("idCargarespumas3").value;
		 	var idCargarespumas4 =document.getElementById("idCargarespumas4").value;
		 	var idCargarespumas5 =document.getElementById("idCargarespumas5").value;
		 	var idCargarespumas6 =document.getElementById("idCargarespumas6").value;
		 	var idCargarespumas7 =document.getElementById("idCargarespumas7").value;
		 	var idCargarespumas8 =document.getElementById("idCargarespumas8").value;
		 	var idCargarespumas9 =document.getElementById("idCargarespumas9").value;
		 	var idCargarespumas10 =document.getElementById("idCargarespumas10").value;
		 	var cantidadConsumida1 =document.getElementById("cantidadConsumida1").value;
		 	var cantidadConsumida2 =document.getElementById("cantidadConsumida2").value;
		 	var cantidadConsumida3 =document.getElementById("cantidadConsumida3").value;
		 	var cantidadConsumida4 =document.getElementById("cantidadConsumida4").value;
		 	var cantidadConsumida5 =document.getElementById("cantidadConsumida5").value;
		 	var cantidadConsumida6 =document.getElementById("cantidadConsumida6").value;
		 	var cantidadConsumida7 =document.getElementById("cantidadConsumida7").value;
		 	var cantidadConsumida8 =document.getElementById("cantidadConsumida8").value;
		 	var cantidadConsumida9 =document.getElementById("cantidadConsumida9").value;
		 	var cantidadConsumida10 =document.getElementById("cantidadConsumida10").value;
		 	var consecutivo =document.getElementById("consecutivo").value;
		 		$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=descargoespumas/cargarCantidad", 
			{idCargarespumas1:idCargarespumas1,idCargarespumas2:idCargarespumas2,idCargarespumas3:idCargarespumas3,
			 idCargarespumas4:idCargarespumas4,idCargarespumas5:idCargarespumas5,idCargarespumas6:idCargarespumas6,
			 idCargarespumas7:idCargarespumas7,idCargarespumas8:idCargarespumas8,idCargarespumas9:idCargarespumas9,
			 idCargarespumas10:idCargarespumas10,cantidadConsumida1:cantidadConsumida1,cantidadConsumida2:cantidadConsumida2,
			 cantidadConsumida3:cantidadConsumida3,cantidadConsumida4:cantidadConsumida4,cantidadConsumida5:cantidadConsumida5,
			 cantidadConsumida6:cantidadConsumida6,cantidadConsumida7:cantidadConsumida7,cantidadConsumida8:cantidadConsumida8,
			 cantidadConsumida9:cantidadConsumida9,cantidadConsumida10:cantidadConsumida10,consecutivo:consecutivo},
			  function(data) {
			       console.log(data);
			      var Registros = $.parseJSON(data);
					document.getElementById("cantidadConsumida1").value = Registros[0];
					document.getElementById("cantidadConsumida2").value = Registros[1];
					document.getElementById("cantidadConsumida3").value = Registros[2];
					document.getElementById("cantidadConsumida4").value = Registros[3];
					document.getElementById("cantidadConsumida5").value = Registros[4];
					document.getElementById("cantidadConsumida6").value = Registros[5];
					document.getElementById("cantidadConsumida7").value = Registros[6];
					document.getElementById("cantidadConsumida8").value = Registros[7];
					document.getElementById("cantidadConsumida9").value = Registros[8];
					document.getElementById("cantidadConsumida10").value = Registros[9];

			       });
		 });



		  $(document).on("click", "#guardar", function (event){
		 	event.preventDefault();
		 		$("#idCargarespumas1").prop( "disabled", false );
		 	$("#idCargarespumas2").prop( "disabled", false );
		 	$("#idCargarespumas3").prop( "disabled", false );
		 	$("#idCargarespumas4").prop( "disabled", false );
		 	$("#idCargarespumas5").prop( "disabled", false );
		 	$("#idCargarespumas6").prop( "disabled", false );
		 	$("#idCargarespumas7").prop( "disabled", false );
		 	$("#idCargarespumas8").prop( "disabled", false );
		 	$("#idCargarespumas9").prop( "disabled", false );
		 	$("#idCargarespumas10").prop( "disabled", false );
		 	var idCargarespumas1 =document.getElementById("idCargarespumas1").value;
		 	var idCargarespumas2 =document.getElementById("idCargarespumas2").value;
		 	var idCargarespumas3 =document.getElementById("idCargarespumas3").value;
		 	var idCargarespumas4 =document.getElementById("idCargarespumas4").value;
		 	var idCargarespumas5 =document.getElementById("idCargarespumas5").value;
		 	var idCargarespumas6 =document.getElementById("idCargarespumas6").value;
		 	var idCargarespumas7 =document.getElementById("idCargarespumas7").value;
		 	var idCargarespumas8 =document.getElementById("idCargarespumas8").value;
		 	var idCargarespumas9 =document.getElementById("idCargarespumas9").value;
		 	var idCargarespumas10 =document.getElementById("idCargarespumas10").value;
		 	var cantidadConsumida1 =document.getElementById("cantidadConsumida1").value;
		 	var cantidadConsumida2 =document.getElementById("cantidadConsumida2").value;
		 	var cantidadConsumida3 =document.getElementById("cantidadConsumida3").value;
		 	var cantidadConsumida4 =document.getElementById("cantidadConsumida4").value;
		 	var cantidadConsumida5 =document.getElementById("cantidadConsumida5").value;
		 	var cantidadConsumida6 =document.getElementById("cantidadConsumida6").value;
		 	var cantidadConsumida7 =document.getElementById("cantidadConsumida7").value;
		 	var cantidadConsumida8 =document.getElementById("cantidadConsumida8").value;
		 	var cantidadConsumida9 =document.getElementById("cantidadConsumida9").value;
		 	var cantidadConsumida10 =document.getElementById("cantidadConsumida10").value;
		 	var consecutivo =document.getElementById("consecutivo").value;
		 	$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=descargoespumas/guardar", 
			{idCargarespumas1:idCargarespumas1,idCargarespumas2:idCargarespumas2,idCargarespumas3:idCargarespumas3,
			 idCargarespumas4:idCargarespumas4,idCargarespumas5:idCargarespumas5,idCargarespumas6:idCargarespumas6,
			 idCargarespumas7:idCargarespumas7,idCargarespumas8:idCargarespumas8,idCargarespumas9:idCargarespumas9,
			 idCargarespumas10:idCargarespumas10,cantidadConsumida1:cantidadConsumida1,cantidadConsumida2:cantidadConsumida2,
			 cantidadConsumida3:cantidadConsumida3,cantidadConsumida4:cantidadConsumida4,cantidadConsumida5:cantidadConsumida5,
			 cantidadConsumida6:cantidadConsumida6,cantidadConsumida7:cantidadConsumida7,cantidadConsumida8:cantidadConsumida8,
			 cantidadConsumida9:cantidadConsumida9,cantidadConsumida10:cantidadConsumida10,consecutivo:consecutivo},

			  function(data) {
			       console.log(data);
			        var desicion = $.parseJSON(data);
			      // var desicion= data;
			       if (desicion[0]=="ok") {
			       	$("#id11").hide();
					   $("#id12").show();  
					  $("#crear").prop( "disabled", false );
					   $("#mensaje").hide();		
			       
			       }else{
			       		
			       		//alert(desicion);
			       		if (desicion[0]=="pesoextra") {
			       		var form = "<form id='descargo' class='clase' name='descargo' method='POST' action='#'>"; 
			       		 form = form+ 

			       		 "<div class='alert alert-danger'>"+
			       		 "<button type='button' class='close' data-dismiss='alert'>x</button>"+
			       		 "¡Cuidado! la cantidad ingresada en el bloque"+desicion[1]+" supera la capacidad maxima"+"</div>";


            			 form = form + "</form>";
            			  $("#mensaje").html(form);
		                 $("#mensaje").show();	

		             }else{

		             		var form = "<form id='descargo' class='clase' name='descargo' method='POST' action='#'>"; 
			       		 form = form+ 

			       		 "<div class='alert alert-danger'>"+
			       		 "<button type='button' class='close' data-dismiss='alert'>x</button>"+
			       		 "¡Cuidado! el bloque "+desicion[1]+" no permite ingresar mas kilos, borra el codigo y clickea confirmar"+"</div>";


            			 form = form + "</form>";
            			  $("#mensaje").html(form);
		                 $("#mensaje").show();	
		             }

			       }
					  	    	
			});

		 	 });
		 
 });
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'descargoespumas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div id="mensaje">
       </div>

<div class="col-md-2"></div>
	
<div class="col-md-8">

	<?php echo $form->errorSummary($model); ?>

	<div class="col-md-12" id='id1'>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo1'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas1','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida1','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

		<div class="col-md-4" >
			<?php echo $form->labelEx($model,'Consecutivo'); ?>
			<?php echo $form->textField($model,'consecutivo',array('id'=>'consecutivo','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'consecutivo'); ?>
		</div>
		
	</div>

	<div class="col-md-12" id='id2' style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo2'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas2','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida2','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>

	<div class="col-md-12" id='id3'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo3'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas3','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida3','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>

	<div class="col-md-12" id='id4'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo4'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas4','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida4','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>
	

	<div class="col-md-12" id='id5'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo5'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas5','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida5','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>


	<div class="col-md-12" id='id6'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo6'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas6','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida6','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>


	<div class="col-md-12" id='id7'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo7'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas7','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida7','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>


	<div class="col-md-12" id='id8'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo8'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas8','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida8','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>


	<div class="col-md-12" id='id9'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo9'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas9','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida9','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>


	<div class="col-md-12" id='id10'  style="display: none">

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'Consecutivo10'); ?>
			<?php echo $form->textField($model,'idCargarespumas',array('id'=>'idCargarespumas10','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'idCargarespumas'); ?>
		</div>

		<div class="col-md-4">
			<?php echo $form->labelEx($model,'cantidadConsumida'); ?>
			<?php echo $form->textField($model,'cantidadConsumida',array('id'=>'cantidadConsumida10','size'=>45, 'maxlength'=>45, 'class'=>'form-control','disabled'=>'true', 'value'=>"0")); ?>
			<?php echo $form->error($model,'cantidadConsumida'); ?>
		</div>

			
	</div>
	
	<div align="center"class="row buttons" id='id11'>
		</br></br></br>
		<?php echo CHtml::Button($model->isNewRecord ? 'Confirmar' : 'Guardar', array("class"=>"btn btn-primary btn-large", "id"=>"guardar")); ?>
		<br>
		
	</div>

	<div align="center"class="row buttons" id='id12'  style="display: none">
		</br></br></br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large",  "id"=>"crear",'disabled'=>'true')); ?>
		<br>
		
	</div>
	
	</div>

<?php $this->endWidget(); ?>
<div class="col-md-2"></div>
</div><!-- form -->

<!--  <div class="panel-body ">
              <div id="agregarProductos"></div>
            </div>
 -->