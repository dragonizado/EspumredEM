<?php
/* @var $this RegistropersonalController */
/* @var $model Registropersonal */
/* @var $form CActiveForm */

ini_set('date.timezone','America/Bogota'); 
$hora=date("g:i A");
$fecha = date("d-m-Y");
$registro=array();
	$registro=Yii::app()->session['Ingreso'];
	//var_dump($registro);
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registropersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<script>

 $(document).ready(function(){
			$(function() {
				$("#canvas").hide();
				$("#nueva").hide();
				$("#confirmar").hide();
				var cxt = canvas.getContext("2d");
				canvas = document.getElementById("canvas");
				video = document.getElementById("video");

				if(!navigator.getUserMedia)
					navigator.getUserMedia = navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;
				if(!window.URL)
					window.URL = window.webkitURL;
				
				if (navigator.getUserMedia) {
					navigator.getUserMedia({
						"video" : true,
						"audio": false
					}, function(stream) {
						video.src = window.URL.createObjectURL(stream);
						video.play();
					},function(err){
						console.log("Ocurrió el siguiente error: " + err);
					});
				}
				else{
					alert("getUserMedia no disponible");
					return;
				}

				// Evento click para capturar una foto.
				$("#foto").click(function() {
					   event.preventDefault();
					   $("#video").hide();
					   $("#canvas").show();
					   $("#confirmar").show();
					   $("#foto").hide();
					   $("#nueva").show();
					cxt.drawImage(video, 0, 0, 450, 368);
				});

				// Evento click para  nueva capturar.
				$("#nueva").click(function() {
					   event.preventDefault();
					   $("#video").show();
					   $("#canvas").hide();
					   $("#confirmar").hide();
					    $("#foto").show();
					   $("#nueva").hide();
					
				});




				// Evento click para enviar la foto al servidor.
				$("#confirmar").click(function() {
					   event.preventDefault();
					   $("#foto").hide();
					   $("#nueva").hide();
					    $("#confirmar").hide();
					var data = canvas.toDataURL("image/jpeg");
					
					// Separamos el "data:image/jpeg;base64,"
					var info = data.split(",", 2);
					$.ajax({
						type : "POST",
						url : 'index.php?r=Registropersonal/guardar_foto',
						data : {
							type : info[0],
							data : info[1]
						},
						success : function(result) {
							console.log("result:", result);
						}
					});

					
				});




			});

		
		$(document).on("change","#vehiculo",function(event){
  	event.preventDefault();
  	if ($("#vehiculo").val()=="N/A") {
  		$("#placa").hide();	
  	}else{
  		$("#placa").show();	
  	};
  	
  
	});

});


		</script>

<div class="col-md-2"></div>
	

<div class="col-md-8">
	
	<?php echo $form->errorSummary($model); ?>

<div>
	
	<div align="center">
		<video id="video" width="350" height="250" autoplay="autoplay">	</video>
		<canvas id="canvas" width="350" height="250"></canvas>	
	</div>

	<div align="center">
		<button id="foto">Tomar Foto!</button>
		<button id="nueva">Nueva Foto!</button>
		<button id="confirmar">Confirmar Foto!</button>
	</div>
	
			
</div>
	

	<div class="col-md-3"></div>
	<div class="col-md-6">

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$registro->nombre." ".$registro->apellidos, 'disabled'=>"disabled" )); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div id="element" style="display: none">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>"Ingreso")); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'horaingreso'); ?>
		<?php echo $form->textField($model,'horaingreso',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>$hora,'disabled'=>"disabled")); ?>
		<?php echo $form->error($model,'horaingreso'); ?>
		
	</div>

	<div>
		<?php echo $form->labelEx($model,'observacion'); ?>
		<?php echo $form->textArea($model,'observacion',array('size'=>200,'maxlength'=>200 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'observacion'); ?>
		<br>
	</div>

		<div>
		<?php echo $form->labelEx($model,'vehiculo'); ?>
			<?php echo $form->dropDownList($model,'vehiculo',array('Motocicleta'=>'Motocicleta','Automóvil'=>'Automóvil',
				'N/A'=>'N/A'),
		array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>"vehiculo")); ?>
		<?php echo $form->error($model,'vehiculo'); ?>
	</div>

	<div id='placa'>
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'placa')); ?>
		<?php echo $form->error($model,'placa'); ?>
		<br>
	</div>

	<div id="element" style="display: none">
				<div>
				<?php echo $form->labelEx($model,'horasalida'); ?>
				<?php echo $form->textField($model,'horasalida',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'horasalida'); ?>
				<br>
			</div>

			<div>
				<?php echo $form->labelEx($model,'fecha'); ?>
				<?php echo $form->textField($model,'fecha',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'fecha'); ?>
				<br>
			</div>
	</div>

	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
<div class="col-md-3"></div>
</div>
<div class="col-md-2"></div>
</div><!-- form -->