<?php
/* @var $this IngresopersonalController */
/* @var $model Ingresopersonal */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
$(document).ready(function(){


				$(document).on("click", "#ingreso", function (event){
				 	event.preventDefault();
				 	
				 		// var idEliminar=this['value'];
						
							document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/create";  
							 
				   //          $(this).parent().remove();
				 	
				});

				$(document).on("click", "#salida", function (event){
				 	event.preventDefault();						
							document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=vehiculo/admin";  
				});
});
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ingresopersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
<?php echo $form->errorSummary($model); ?>
		<div class="col-md-12" align="center" >

					 <div class="col-md-3"></div>
					<div class="buttons col-md-3" id="ingreso">
					  <a  align="center"><input name="conductores"  type="image" src="<?php echo Yii::app()->baseUrl;?>/images/CONDUCTOR.jpg" width='250px' height="250px"></a>
					</div>
					<div class="buttons col-md-3" id="salida" >
					   <a  align="center" ><input name="conductores" type="image" src="<?php echo Yii::app()->baseUrl;?>/images/actualizar.png" width='250px' height="250px"></a>
		            </div>  
		            <div class="col-md-3"></div>

		</div>

		<div class="col-md-12" align="center" >
					<div class="col-md-3"></div>
					<div class="buttons col-md-3" >
					  <?php echo $form->labelEx($model,'Crear Vehiculo'); ?>
					  
					</div>
					<div class="buttons col-md-3"  >
					 <?php echo $form->labelEx($model,'Actualizar Vehiculo'); ?>
		             
		            </div>  
		            <div class="col-md-3"></div>

		</div>
<?php $this->endWidget(); ?>
<div class="col-md-4"></div>
</div><!-- form -->