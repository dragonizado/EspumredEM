<?php
/* @var $this HerramientasController */
/* @var $model Herramientas */
/* @var $form CActiveForm */
?>

<script type="text/javascript" >
//funcion para mostrar campos si esta estudiando actualmente y si no esconderlo
$(document).ready(function(){
$("#buscar").on("click",function(event){   
	 event.preventDefault();
	
	var id = $("#reporte").val();

	 
	 // $this->redirect(array('mostrarPlantilla','id'=>$model->id));
	  // var idProducto = $(this).attr('id');
	  // var nombreProducto = $(this).attr('nombreProducto');
	  // var precioProducto = $(this).attr('precioProducto');
	  // idTienda = $(this).attr('idTienda');

	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=herramientas/guardarid", {id:id},
	   function(data) {
	   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=herramientas/mostrarInforme"); 
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	    })
	  // .done(mostrarProductosEnCarrito);

	});
	});
  </script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'herramientas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-4"></div>
		
	<div class="col-md-4">

	<div>
		<?php echo $form->labelEx($model,'Reporte'); ?>
		<?php echo $form->dropDownList($model,'nombre',array('' => '','Herramientas' => 'Herramientas', 'Repuestos' => 'Repuestos'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control', 'id'=>'reporte')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<br>
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton(' Imprimir', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	</div>
	<br>
</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->