<?php




?>

<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#siguiente", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicion/_formTodo";  
			

});


$(document).on("click","#cod",function(event){
			event.preventDefault();
			
            document.getElementById("cod").value=$("#Condicionescomerciales_nombreCliente").val();

       });

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prueba-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



   <?php echo $form->errorSummary($model); ?>

   <div class="col-md-3"></div>
      <div class="col-md-6">
	<p class="note">Los campos con <span class="required">*</span> son requeridos</p>



		 <div class="col-md-4" >		  
		 <?php echo $form->labelEx($model,'nombre'); ?>
		 <?php echo $form->textField($model,'nombre' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod', )); ?>
		 <?php echo $form->error($model,'nombre'); ?>
         </div>

		 <div class="col-md-4" >		  
		 <?php echo $form->labelEx($model,'apellido'); ?>
		 <?php echo $form->textField($model,'apellido' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod', )); ?>
		 <?php echo $form->error($model,'apellido'); ?>
         </div>

		 <div class="col-md-4" >		  
		 <?php echo $form->labelEx($model,'ciudad'); ?>
		 <?php echo $form->textField($model,'ciudad' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'cod', )); ?>
		 <?php echo $form->error($model,'ciudad'); ?>
	     </div>
               

               
	  <div class="buttons col-md-10" align="center">
	
	
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Siguiente', array("class"=>"btn btn-primary btn-large")); ?>
		<br><br>
	  </div>
  </div>
 <div class="col-md-3"></div>
 <?php $this->endWidget(); ?>

 </div><!-- form -->