<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */

?>


<script type="text/javascript" >
//funcion para mostrar campos si esta estudiando actualmente y si no esconderlo
  $(document).on("change", "#estado", function (event){
 	event.preventDefault();
 	 var estado=$("#estado").val();
 	if (estado=="Enviado") {
 		var dia = new Date();
 	    document.getElementById("Fecha_Envio").value=dia.getFullYear()+ "/" + (dia.getMonth() +1) + "/" +dia.getDate()+"  " +(dia.getHours())+":"+
dia.getMinutes() ;

 	};


 		if (estado=="Contabilizada") {
 		var dia = new Date();
 	    document.getElementById("Fecha_Pagado").value=dia.getFullYear()+ "/" + (dia.getMonth() +1) + "/" +dia.getDate()+"  " +(dia.getHours())+":"+
dia.getMinutes() ;





 	};
 
 	// var desicion=this['value'];
 	// if (desicion=="Activo") {
 	// 	$("#element").hide();
 	// };
 	// if (desicion=="Retirado") {
 	// 	$("#element").show();
 	// };
 	
 


 	
});
  </script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'facturacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


<div class="col-md-4"></div>

<div class="col-md-4">


	<?php echo $form->errorSummary($model); ?>


	

	<?php if (Yii::app()->user->rol=='facturaGeneral'): ?>
		<div>
					<?php echo $form->labelEx($model,'estado'); ?>
					<?php //echo $form->textField($model,'estado',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>"recibido")); ?>
					<?php echo $form->dropDownList($model,'estado',array('Recibido'=>'Recibido','Contabilizada'=>'Contabilizada'),array('id'=>'estado','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'estado'); ?>
				</br>
		</div>
		<div style="display:none">
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'Fecha_Pagado'); ?>
					<?php echo $form->textField($model,'Fecha_Pagado',array('id'=>'Fecha_Pagado', 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'Fecha_Pagado'); ?>
				</div>
			
		</div>
	<?php endif ?>
		

	<?php if (Yii::app()->user->rol=='factura'): ?>
		<div>
					<?php echo $form->labelEx($model,'estado'); ?>
					<?php //echo $form->textField($model,'estado',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control','value'=>"Recibido")); ?>
					<?php echo $form->dropDownList($model,'estado',array('Recibido'=>'Recibido','Enviado'=>'Enviado'),array('id'=>'estado','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'estado'); ?>
				</br>
		</div>

		<div style="display:none">
				<div class="col-md-4">
					<?php echo $form->labelEx($model,'Fecha_Envio'); ?>
					<?php echo $form->textField($model,'Fecha_Envio',array('id'=>'Fecha_Envio', 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
					<?php echo $form->error($model,'Fecha_Envio'); ?>
				</div>
			
		</div>
	<?php endif ?>

		

		


	<div align="center" class="buttons">

		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
<?php $this->endWidget(); ?>
</div>
<div class="col-md-4"></div>
</div><!-- form -->

	