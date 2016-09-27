<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
// ini_set('date.timezone','America/Bogota'); 
// $fecha = date("d/m/Y");
// $hora = date("g:i A"); 
// $modeloRegistro =array();
// $modeloRegistro=Registroingresovehiculo::model()->findByAttributes(array('placa'=>'SNM772','fecha'=>$fecha));
// var_dump($modeloRegistro);

?>

<script type="text/javascript">
$(document).on("click", "#buscar", function (event){
	var placa=$("#placa").val();
 	event.preventDefault();
	 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/guardarId",{placa:placa},

				 function(data) {
				 	console.log(data);
					      var id = data;
					    // window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/mostrarInforme");  
				 	 if (id=="null") {
					      	alert("El vehiculo no esta registrado o esta mal copiado");

					      }else{

					   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/mostrarInforme");  
					      };
				 	
				// 	    	console.log(data);
				// 	      var Registro = data;
				// 	        Registros = $.parseJSON(Registro);
  		
					     						        
			    })
});


$(document).on("click", "#ingreso", function (event){
	var placa=$("#placa").val();
 	event.preventDefault();
		 	if (confirm("Seguro que desea registrar la hora de ingreso del vehiculo  "+ placa +"!") == true) {
		        $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/validadIngreso",{placa:placa},

						  function(data) {
						  console.log(data);
					      var id = data;
					      if (id=="null") {
					      		alert("El vehiculo no esta registrado o esta mal copiado");

					      }else{
						      	if (id=="ingreso") {

						      		alert("El vehiculo no ha salido de la compañia");
						      	}else{

						      			window.location.href="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registroingresovehiculo/create";
						      	}
	//					      	
				
  		
					      };
						 	//window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registroingresovehiculo/create");  
						 
						// // 	    	console.log(data);
						// // 	      var Registro = data;
						// // 	        Registros = $.parseJSON(Registro);
		  		
							     						        
					     })
		    } else {
		       
		    }
		 	 
	 	  
});


$(document).on("click", "#salida", function (event){
	var placa=$("#placa").val();
 	event.preventDefault();
 	 if (confirm("Seguro que desea registrar la hora de salidad del vehiculo  "+ placa +"!") == true) {
     	$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/guardarIngreso",{placa:placa},

				  function(data) {
				 	
				 	    	console.log(data);
					      var id = data;
					      if (id=="null") {
					      	alert("El vehiculo no ha ingresado");

					      }else{
//					      		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registroingresovehiculo/update&id="+id+"");  
					      		window.location.href="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registroingresovehiculo/update&id="+id+"";
				
  		
					      };
			
					     						        
			   })
    } else {
       
    }
 	 
	 	   
});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'placa')); ?>
		<?php echo $form->error($model,'placa'); ?>
		<br>
	</div>

	<div class="buttons" align="center">
		<?php echo CHtml::Button('Ingreso', array("class"=>"btn btn-primary btn-large",'id'=>'ingreso')); ?>
		<?php echo CHtml::Button('Buscar', array("class"=>"btn btn-primary btn-large",'id'=>'buscar')); ?>
		<?php echo CHtml::Button('Salida', array("class"=>"btn btn-primary btn-large",'id'=>'salida')); ?>
		
	</div>

<?php $this->endWidget(); ?>
	</div>
	<div class="col-md-4"></div>
</div><!-- form -->