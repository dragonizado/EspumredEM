<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> con obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'Nombre'); ?>
		<?php echo $form->textField($model,'Nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Apellido'); ?>
		<?php echo $form->textField($model,'Apellido',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Apellido'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'CC'); ?>
		<?php echo $form->textField($model,'CC',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'CC'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'NombreUsuario'); ?>
		<?php echo $form->textField($model,'NombreUsuario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'NombreUsuario'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'Rol'); ?>
		<?php echo $form->dropDownList($model,'Rol',array(''=>'','admin'=>'admin','AdminfacturaGeneral'=>'AdminfacturaGeneral',
			'corte'=>'corte','costo'=>'costo','costoExterno'=>'costoExterno','costoMayorista'=>'costoMayorista','factura'=>'factura',
			'facturaCompras'=>'facturaCompras','facturaGeneral'=>'facturaGeneral','ingresopersonal'=>'ingresopersonal','mantenimiento'=>'mantenimiento',
			'porteria'=>'porteria','talentohumano'=>'talentohumano','Cartera'=>'Cartera','Comercio'=>'Comercio','Asesor'=>'Asesor','Gerente'=>'Gerente','Revisoria'=>'Revisoria','Qreclamos'=>'Qreclamos','GerenteComercial'=>'GerenteComercial','GerenteCartera'=>'GerenteCartera','recepcion'=>'recepcion','ServicioCliente'=>'ServicioCliente',
	  ),array('size'=>1,'maxlength'=>1 ,'id'=>"Rol",'class'=>'form-control','')); ?>
		<?php echo $form->error($model,'Rol'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Password'); ?>
		<?php echo $form->passwordField($model,'Password',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'Password'); ?>
	</div>
	
	<br>
	<div align="center" class="buttons">
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	<br>
</div>
	<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->