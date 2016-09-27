<?php
/* @var $this InformacionpersonalController */
/* @var $model Informacionpersonal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'informacionpersonal-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	
	<?php echo $form->errorSummary($model); ?>

<div class="col-md-3"></div>
<div class="col-md-6">
	<div class="col-md-12">
		<div class="col-md-4" >
		<?php echo $form->labelEx($model,'cc'); ?>
		<?php echo $form->textField($model,'cc',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'cc'); ?>
	</div>

	<div class="col-md-8">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>
	</div>
	
	<div class="col-md-12">
		<div class="col-md-4">
			<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
			<?php //echo $form->textField($model,'fechaNacimiento',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			<?php //echo $form->error($model,'fechaNacimiento'); ?>
			<?php 
	                        if ($model->fechaNacimiento != '') {
	                                    $model->fechaNacimiento = date('d-m-Y', strtotime($model->fechaNacimiento));
	                                }
	                          //forma de mostrar un calendario mas elegante en el formulario.
	                                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	                                    'model' => $model,
	                                    'attribute' => 'fechaNacimiento',
	                                    'value' => $model->fechaNacimiento,
	                                    'language' => 'es',
	                                    'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control'),
	                                    'options' => array(
	                                        'autoSize' => true,
	                                        'defaultDate' => $model->fechaNacimiento,
	                                        'dateFormat' => 'yy-mm-dd',
	                                        //'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.png',
	                                        'buttonImageOnly' => false,
	                                        'buttonText' => 'Fecha',
	                                        'selectOtherMonths' => true,
	                                        'showAnim' => 'slide',
	                                        'showButtonPanel' => true,
	                                        'showOn' => 'button',
	                                        'showOtherMonths' => true,
	                                        'changeMonth' => 'true',
	                                        'changeYear' => 'true',
	                                        'minDate' => '-100Y', //fecha minima
	                                        'maxDate' => "+20Y",//fecha maxima

	                                    ),
	                                ));
	                                    ?>
	                                    <?php echo $form->error($model,'fechaNacimiento'); ?>
		</div>



		<div class="col-md-4" >
			<?php echo $form->labelEx($model,'lugarNacimiento'); ?>
			<?php //echo $form->textField($model,'lugarNacimiento',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); 
				if ($model->lugarNacimiento !='') {
                             $value = ($model->lugarNacimiento);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'lugarNacimiento', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'lugarNacimiento',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarMunicipio'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_lugarNacimiento").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_lugarNacimiento").val(0); }'
                             ),
                         ));

			?>
			<?php echo $form->error($model,'lugarNacimiento'); ?>
		</div>

		<div  class="col-md-4">
			<?php echo $form->labelEx($model,'sexo'); ?>
			<?php echo $form->dropDownList($model,'sexo',array(''=>'','M' => 'Maculino', 'F' => 'Femenino'),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
			<?php echo $form->error($model,'sexo'); ?>
		</div>

	</div>
	
	
<div class="col-md-12">
	<div class="col-md-4" >
		<?php echo $form->labelEx($model,'rh'); ?>
		<?php echo $form->dropDownList($model,'rh',array(''=>'','0-' => '0-', '0+' => '0+',
			'A-' => 'A-', 'A+' => 'A+',
			'B-' => 'B-', 'B+' => 'B+',
			'AB-' => 'AB-', 'AB+' => 'AB+'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'rh'); ?>
	</div>

	<div  class="col-md-4">
		<?php echo $form->labelEx($model,'estadoCivil'); ?>
		<?php echo $form->dropDownList($model,'estadoCivil',array(''=>'',
			'Soltero' => 'Soltero', 'Divorciado' => 'Divorciado',	'Casado' => 'Casado',	'Viudo' => 'Viudo'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'estadoCivil'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'numeroHijos'); ?>
		<?php echo $form->textField($model,'numeroHijos',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'numeroHijos'); ?>
	</div>
</div>

<div class="col-md-12">
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'direccionResidencia'); ?>
		<?php echo $form->textField($model,'direccionResidencia',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'direccionResidencia'); ?>
	</div>
	
	<div class="col-md-6">
		<?php echo $form->labelEx($model,'tiempoCasado'); ?>
		<?php echo $form->textField($model,'tiempoCasado',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'tiempoCasado'); ?>
	</div>
	</div>
<div class="col-md-12">
	<div class="col-md-4">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'municipio'); ?>
		<?php //echo $form->textField($model,'municipio',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); 
		
      		if ($model->municipio !='') {
                             $value = ($model->municipio);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'municipio', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'municipio',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarMunicipio'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_municipio").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Informacionpersonal_municipio").val(0); }'
                             ),
                         ));
      		
		?>
		<?php echo $form->error($model,'municipio'); ?>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="col-md-6" >
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>
</div>
<div class="col-md-12">
	<div class="col-md-8">
		<?php echo $form->labelEx($model,'numero de libretaMilitar'); ?>
		<?php echo $form->textField($model,'libretaMilitar',array('size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'libretaMilitar'); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->labelEx($model,'claseLibretaMilitar'); ?>
		<?php echo $form->dropDownList($model,'claseLibretaMilitar',array(''=>'','Primera' => 'Primera', 'Segunda' => 'Segunda'
			),array('size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'claseLibretaMilitar'); ?>
	</div>
	<br><br><br>
</div>

	<div class="buttons col-md-10" align="center">
	<br>
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
		 <br><br><br>
	</div>
</div>
<div class="col-md-3"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->