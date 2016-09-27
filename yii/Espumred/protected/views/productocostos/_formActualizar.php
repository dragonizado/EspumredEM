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
     var codigo=$("#id").val();
				 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/cargarProductos",{codigo:codigo},
								  function(data) {
								      // console.log(data);
								      var productoCostos = $.parseJSON(data);
			                          
			                          console.log(productoCostos);
								      
								      document.getElementById("id").value=productoCostos["cod"];
								      document.getElementById("nombre").value=productoCostos["nombre"];
							          document.getElementById("medidas").value=productoCostos["medidas"];
							          document.getElementById("calibre").value=productoCostos["medidas"];
							          document.getElementById("precioMayoristas").value=productoCostos["precioMayoristas"];
							          document.getElementById("precioCorreria").value=productoCostos["precioCorreria"];
							          $("#element").show();
							          $("#btnactualizar").show();
							          $("#btnbuscar").hide();
							          
							          	         
								       //window.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/mostrarPlantilla";
								        
						   
						    })


	 	 
	   		
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	  // .done(mostrarProductosEnCarrito);
	});


$("#actualizar").on("click",function(event){   
	 event.preventDefault();
     
    var codigo=$("#id").val();
	var nombre=$("#nombre").val();
	var medidas=$("#medidas").val();
	var calibre=$("#calibre").val();
	var precioMayoristas=$("#precioMayoristas").val();
	var precioCorreria=$("#precioCorreria").val();
				 	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=productocostos/actualizarProductos",{
						nombre:nombre,
						medidas:medidas,
						calibre:calibre,
						precioMayoristas:precioMayoristas,
						precioCorreria:precioCorreria,
						codigo:codigo},
								  function(data) {
								      document.getElementById("id").value="";
								      document.getElementById("nombre").value="";
							          document.getElementById("medidas").value="";
							          document.getElementById("calibre").value="";
							          document.getElementById("precioMayoristas").value="";
							          document.getElementById("precioCorreria").value="";
							          $("#element").hide();
							          $("#btnactualizar").hide();
							          $("#btnbuscar").show();
						   
						    })


	 	 
	   		
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
	
	

<div>
		<?php echo $form->labelEx($model,'codigosap'); ?>
		<?php echo $form->textField($model,'nombre',array('id'=>'id','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	
<div id="element" style="display:none;">
	

		<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('id'=>'nombre','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'medidas'); ?>
		<?php echo $form->textField($model,'medidas',array('id'=>'medidas','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'medidas'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'calibre'); ?>
		<?php echo $form->textField($model,'calibre',array('id'=>'calibre','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'calibre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precioMayoristas'); ?>
		<?php echo $form->textField($model,'precioMayoristas',array('id'=>'precioMayoristas','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'precioMayoristas'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precioCorreria'); ?>
		<?php echo $form->textField($model,'precioCorreria',array('id'=>'precioCorreria','size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'precioCorreria'); ?>
		<br>
	</div>

</div>

	<div  id="btnbuscar" class="buttons" align="center">
		<br>
		<?php echo CHtml::submitButton('Buscar', array("class"=>"btn btn-primary btn-large",'id'=>'buscar')); ?>
	</div>

	<div id="btnactualizar" class="buttons" align="center" style="display:none;">
		<br>
		<?php echo CHtml::submitButton('Actualizar', array("class"=>"btn btn-primary btn-large",'id'=>'actualizar')); ?>
	</div>

</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->

<div class="col-md-4"></div>
	
	<div align="center"  class="buttons"  style="display:none" id="boton">
        <br>
        <?php echo CHtml::submitButton(' imprimir', array("class"=>"btn btn-primary btn-large" ,"id"=>"imprimir")); ?>
	<br>
	</div>
</div>