<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */
/* @var $form CActiveForm */
$usuario=Yii::app()->user->rol;
?>
<script type="text/javascript">
 $(document).ready(function(){

$("#buscar").on("click",function(event){   
	 event.preventDefault();
	 var tipo = $("#tipo").val();
	 var rol ='<?php echo Yii::app()->user->rol; ?>';
	 var busquedad="";
	 var Archivo = $("#archivo").val();
	 if (Archivo=="Excel") {
				 if (rol=="costo") {
				 	busquedad=$("#nombre").val();
				 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/guardarTipo",{tipo:tipo, busquedad:busquedad},
								  function(data) {
								    	console.log(data);
								      var Registro = data;
								       window.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/generarExcelColchones";
								        
						   
						    })

				 }else	{
				 	
				 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/guardarTipo",{tipo:tipo, busquedad:busquedad},
								  function(data) {
								    	console.log(data);
								      var Registro = data;
								       window.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/generarExcelColchones";
								        
						   
						    })


				 };

	 	  }else{
	 	  	busquedad=$("#nombre").val();
				 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/guardarTipo",{tipo:tipo, busquedad:busquedad},
								  function(data) {
								    	console.log(data);
								      var Registro = data;
								       window.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/mostrarPlantilla";
								        
						   
						    })


	 	  };
	   		
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	  // .done(mostrarProductosEnCarrito);
	});

 });

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'productocostos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
<div class="col-md-4">
	
	<?php echo $form->errorSummary($model); ?>
	<?php if ($usuario=="costo"): ?>

	<div>
		<?php echo $form->labelEx($model,'Tipo de Busquedad'); ?>
		<?php echo $form->dropDownList($model,'nombre',array(
			''=>'',
		'MAYORISTAS'=>'MAYORISTAS',
		'CORRERIA'=>'CORRERIA',
		),array('id'=>'nombre','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
		<br>
	</div>


	

<?php endif ?>

	<div>
		<?php echo $form->labelEx($model,'Tipo de Archivo'); ?>
		<?php echo $form->dropDownList($model,'nombre',array(
			''=>'',
		'Pdf'=>'Pdf',
		'Excel'=>'Excel',
		),array('id'=>'archivo','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
		<br>
	</div>
	
	<div>
		<?php echo $form->labelEx($model,'tipo'); ?>
		<?php echo $form->dropDownList($model,'tipo',array(
		'COLCHONES'=>'COLCHONES',
		'ALMOHADAS Y PROTECTOR'=>'ALMOHADAS Y PROTECTOR',
		'COLCHONETA'=>'COLCHONETA',
		'BASE CAMA'=>'BASE CAMA',
		'COMBO'=>'COMBO',
		'MUEBLES'=>'MUEBLES',

		),array('id'=>'tipo','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tipo'); ?>
		<br>
	</div>

<!-- 	<div>
		<?php //echo $form->labelEx($model,'nombre'); ?>
		<?php //echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'medidas'); ?>
		<?php //echo $form->textField($model,'medidas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'medidas'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'calibre'); ?>
		<?php //echo $form->textField($model,'calibre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'calibre'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'precioMayoristas'); ?>
		<?php //echo $form->textField($model,'precioMayoristas',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'precioMayoristas'); ?>
	</div>

	<div>
		<?php //echo $form->labelEx($model,'precioCorreria'); ?>
		<?php //echo $form->textField($model,'precioCorreria',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'precioCorreria'); ?>
		<br>
	</div>
 -->
	<div class="buttons" align="center">
		<?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary btn-large",'id'=>'buscar')); ?>
	</div>

</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->

<div class="col-md-4"></div>
	<div id="formulario">

	</div>
	<div align="center"  class="buttons"  style="display:none" id="boton">
        <br>
        <?php echo CHtml::submitButton(' imprimir', array("class"=>"btn btn-primary btn-large" ,"id"=>"imprimir")); ?>
	<br>
	</div>
</div>