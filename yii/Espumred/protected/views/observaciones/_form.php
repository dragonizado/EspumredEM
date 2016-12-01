<?php

$Registro=Yii::app()->session['Registro'];

?>


<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicion/create";  
			 
   //          $(this).parent().remove();		
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


    <?php echo $form->errorSummary($model); ?>

       <div class="col-md-12 CTX">
	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45)); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->
      
       
	  <div class="col-md-4 CTX">
	   </div>

    
   </div>

    <div class="col-md-12 CTX">
		<center><?php echo $form->labelEx($model,'OBSERVACIONES*'); ?><center>
		<center><?php echo $form->textArea($model,'observaciones',array('size'=>900,'maxlength'=>900 ,'id'=>'observaciones','class'=>'form-control','rows'=>4, 'width'=>50, 'value'=>'N/A')); ?><br><br>
		<?php echo $form->error($model,'observaciones'); ?>

    </div>


    </div>

    <div class="col-md-4 CTX">
      <?php echo $form->labelEx($model,'responsables de aprobacion*'); ?>
      <?php echo $form->dropDownList($model,'correo',array('practicante.sistemas@espumasmedellin.com'=>'Gerentes Espumas Medellin S.A',
      ),array('id'=>'correo','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
        
       <?php echo $form->error($model,'correo'); ?>  
    </div>


    <div class="col-md-4 CTX">
		<?php echo $form->labelEx($model,'Nombre Cliente*'); ?>
		<?php echo $form->textField($model,'NombreCliente',array('size'=>45,'maxlength'=>45 ,'id'=>'codigo','class'=>'form-control' ,'value'=>$Registro[0]['nombreCliente'])); ?>
		<?php echo $form->error($model,'NombreCliente'); ?>

    </div>


    <div class="col-md-4 CTX">
		<?php echo $form->labelEx($model,'Nombre Asesor'); ?>
		<?php echo $form->textField($model,'NombreAsesor',array('size'=>45,'maxlength'=>45 ,'id'=>'NombreAsesor','class'=>'form-control' ,'value'=>$Registro[0]['nombreAsesor'])); ?>
		<?php echo $form->error($model,'NombreAsesor'); ?>

    </div>


    </div>
      
       </div>
	       <div class="buttons col-md-24" align="center">
	       <br><br>
		   <center><?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?><td>
		   <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		  <br><br><br>
	    </div>


      <?php $this->endWidget(); ?>
     </div>
   <div class="col-md-24">
	
  </div>

  </div><!-- form -->