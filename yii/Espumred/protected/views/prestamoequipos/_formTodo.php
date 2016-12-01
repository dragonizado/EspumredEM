<?php




?>

<style type="text/css">
.CTX
{
  text-align: center !important;
  margin-top:1%; 
}
.CTX .form-inline input{
  width: 86%;
}
</style> 


</script>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'prestamoequipos-form',
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
		 <?php echo $form->labelEx($model,'Observaciones'); ?>
		 <?php echo $form->textArea($model,'observaciones' ,array('size'=>45,'maxlength'=>900 ,'class'=>'form-control','id'=>'observaciones', )); ?>
		 <?php echo $form->error($model,'observaciones'); ?>
         </div>


	    <div class="col-md-4" >
        <?php echo $form->labelEx($model,'Estado'); ?>
        <?php echo $form->dropDownList($model,'estado',array(''=>'','PRESTADO' => 'PRESTADO', 'DEVUELTO' => 'DEVUELTO',
       'EN PROCESO' => 'EN PROCESO', 
       ),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control','id'=>'estado')); ?>
       <?php echo $form->error($model,'estado'); ?>
       </div>

  
	  <div class="buttons col-md-10" align="center">
		
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Asignar Prestamo', array("class"=>"btn btn-primary btn-large")); ?>
		<br><br>
	  </div>
  </div>
 <div class="col-md-3"></div>
 <?php $this->endWidget(); ?>

 </div><!-- form -->