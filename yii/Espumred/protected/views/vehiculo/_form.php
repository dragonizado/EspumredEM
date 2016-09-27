<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculo-form',
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
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'placa'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'propietario'); ?>
		<?php echo $form->textField($model,'propietario',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'propietario'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'rtm'); ?>
		<?php 
			/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->rtm != '') {
	                                    $model->rtm = date('d-m-Y', strtotime($model->rtm));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'rtm',
	                                    'value' => $model->rtm,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->rtm,
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
		
		<?php echo $form->error($model,'rtm'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'soat'); ?>
		<?php 	/*este metodo de abajo funciona para crear un calendario mas adecuado para la que sea mas armonioso*/
	                        if ($model->soat != '') {
	                                    $model->soat = date('d-m-Y', strtotime($model->soat));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'soat',
	                                    'value' => $model->soat,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->soat,
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

	                                    <?php echo $form->error($model,'soat'); ?>
	</div>
	<div>
		<?php echo $form->labelEx($model,'conductor'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->conductor !='') {
                             $value = ($model->conductor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'conductor', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'conductor',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listar'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Vehiculo_conductor").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Vehiculo_conductor").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'conductor'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'ayudante'); ?>
			<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->ayudante !='') {
                             $value = ($model->ayudante);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'ayudante', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'ayudante',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listar'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Vehiculo_ayudante").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Vehiculo_ayudante").val(0); }'
                             ),
                         ));

			?>
		
		<?php echo $form->error($model,'ayudante'); ?>
		<br>
	</div>

	<div class="buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>
</div>
<div class="col-md-4"></div>
</div><!-- form -->