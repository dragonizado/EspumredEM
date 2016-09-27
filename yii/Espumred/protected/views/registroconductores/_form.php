<?php
/* @var $this RegistroconductoresController */
/* @var $model Registroconductores */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'registroconductores-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>


	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'cc'); ?>
		<?php echo $form->textField($model,'cc',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cc'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->dropDownList($model,'cargo',array('Conductor'=>'Conductor','Ayudante'=>'Ayudante'
						),array('id'=>'cargo','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'eps'); ?>
		<?php echo $form->textField($model,'eps',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'eps'); ?>
		<br>
	</div>
	

	<div>
		<?php echo $form->labelEx($model,'afp'); ?>
		<?php echo $form->textField($model,'afp',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		
		<?php echo $form->error($model,'afp'); ?>
		<br>
	</div>
	

	<div>
		<?php echo $form->labelEx($model,'arl'); ?>
		<?php echo $form->textField($model,'arl',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'arl'); ?>
		<br>
	</div>

			<div>
		<?php echo $form->labelEx($model,'vigenciaSeguridad'); ?>
		<?php 	/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->vigenciaSeguridad != '') {
	                                    $model->vigenciaSeguridad = date('d-m-Y', strtotime($model->vigenciaSeguridad));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'vigenciaSeguridad',
	                                    'value' => $model->vigenciaSeguridad,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->vigenciaSeguridad,
	                                        'dateFormat' => 'dd/mm/yy',
	                                        'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		
		<?php echo $form->error($model,'vigenciaSeguridad'); ?>
		<br>
	</div>
	

	<div class="buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->