<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gerentes-form',
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


    <div >
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'nombreGerente'); ?>
		<?php echo $form->textField($model,'nombreGerente',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'nombreGerente'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'correo*'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','style'=>"text-transform:uppercase;")); ?>
		<?php echo $form->error($model,'correo'); ?>
	</div>


	   <div>
			<?php echo $form->labelEx($model,'Fecha Creacion* '); ?><br>
			<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_creacion != '') {
	                                    $model->fecha_creacion = date('d-m-Y', strtotime($model->fecha_creacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_creacion',
	                                    'value' => $model->fecha_creacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_creacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'2016',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                     ),
	                                   ));

									   
	                                 ?>
	                                <?php echo $form->error($model,'fecha_creacion'); ?>

	                         </div>
	                                
           <div>
		        <?php echo $form->labelEx($model,'Fecha Modificacion* '); ?><br>
			    <?php 
			     /*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->fecha_modificacion != '') {
	                                    $model->fecha_modificacion = date('d-m-Y', strtotime($model->fecha_modificacion));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fecha_modificacion',
	                                    'value' => $model->fecha_modificacion,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fecha_modificacion,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'fold',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
											'yearRange'=>'2016',
	                                        // 'minDate' => '-100Y', //fecha minima
	                                        //'maxDate' => "+120Y",//fecha maxima

	                                     ),
	                                   ));

									   
	                                 ?>
	                                <?php echo $form->error($model,'fecha_modificacion'); ?>

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