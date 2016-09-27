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
$(document).on("click", "#ver", function (event){
var placa=$("#observaciones").val();
 	event.preventDefault();
 	
	$.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/guardarId",{observaciones:observaciones}, 	 

				 function(data) {
				 	console.log(data);
					      var id = data;
					    // window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/mostrarInforme");  
				 	 if (id=="null") {
					      	alert("El vehiculo no esta registrado o esta mal copiado");

					      }else{

					   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/mostrarPlantilla");  

					      };
				 	
				// 	    	console.log(data);
				// 	      var Registro = data;
				// 	        Registros = $.parseJSON(Registro);
  		
					     						        
			    })
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
<div class="col-md-4"></div>
<div class="col-md-4">
	

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'observaciones')); ?>
		<?php echo $form->error($model,'observaciones'); ?>
		<br>
	</div>

	<div class="buttons" align="center">
		
		<?php echo CHtml::Button('Buscar', array("class"=>"btn btn-primary btn-large",'id'=>'ver')); ?>

		
	</div>

<?php $this->endWidget(); ?>
	</div>
	<div class="col-md-4"></div>
</div><!-- form -->