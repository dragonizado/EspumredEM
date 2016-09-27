<?php
/* @var $this ExperiencialaboralController */
/* @var $model Experiencialaboral */
/* @var $form CActiveForm */
?>


<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'experiencialaboral-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php echo $form->errorSummary($model); ?>
<div  class="col-md-4" ></div>
<div class="col-md-4">

	<p class="note">La informacion con <span class="required">*</span> con requeridas.</p>

	
	<div >
		<?php echo $form->labelEx($model,'empresa'); ?>
		<?php echo $form->textField($model,'empresa',array('size'=>45,'id'=>'empresa','maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'empresa'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'cargo'); ?>
		<?php echo $form->textField($model,'cargo',array('size'=>45,'id'=>'cargo','maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'cargo'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'funciones'); ?>
		<?php echo $form->textField($model,'funciones',array('size'=>45,'id'=>'funciones','maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'funciones'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_inicio != '') {
	                                    $model->fecha_inicio = date('d-m-Y', strtotime($model->fecha_inicio));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_inicio',
	                                    'value' => $model->fecha_inicio,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha_inicio'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_inicio,
	                                        'dateFormat' => 'yy-mm-dd',
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
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'fecha_retiro'); ?>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_retiro != '') {
	                                    $model->fecha_retiro = date('d-m-Y', strtotime($model->fecha_retiro));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_retiro',
	                                    'value' => $model->fecha_retiro,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control','id'=>'fecha_retiro'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_retiro,
	                                        'dateFormat' => 'yy-mm-dd',
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
											'yearRange'=>'1920',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
		<?php echo $form->error($model,'fecha_retiro'); ?>
	</div>


	<div class="buttons" align="center">
	<br>
			
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>

		 <br>
	</div>
</div>
<div  class="col-md-4" ></div>
<?php $this->endWidget(); ?>
</div><!-- form -->