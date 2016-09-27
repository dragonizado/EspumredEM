<?php
/* @var $this FacturacionController */
/* @var $model Facturacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<div class="col-md-12">
	
	<div>
		
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'provedor'); ?>
			<?php /*este metodo de abajo funciona para buscar todos el lugar de nacimiento los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->provedor !='') {
                             $value = ($model->provedor);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'provedor', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'provedor',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarProveedor'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Facturacion_provedor").val(0); }'
                             ),
                         ));

			?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'numeroFactura'); ?>
		<?php echo $form->textField($model,'numeroFactura',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'valorFactura'); ?>
		<?php echo $form->textField($model,'valorFactura',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'consecutivo'); ?>
		<?php echo $form->textField($model,'consecutivo',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>
	
	<div class="col-md-4">
		<?php echo $form->label($model,'observacion'); ?>
		<?php echo $form->textField($model,'observacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
		
	</div>
	
	<div class="col-md-4">
		<?php echo $form->label($model,'Usuario'); ?>
		<?php echo $form->textField($model,'idUsuario',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>


	<div class="col-md-4">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Creacion'); ?>
		<?php echo $form->textField($model,'Fecha_Creacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Envio'); ?>
		<?php echo $form->textField($model,'Fecha_Envio',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>


	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Vencimiento'); ?>
		<?php echo $form->textField($model,'Fecha_Vencimiento',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Pagado'); ?>
		<?php echo $form->textField($model,'Fecha_Pagado',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
			</br>
	</div>

	<div class="col-md-4">
		<?php echo $form->label($model,'Fecha_Modificacion'); ?>
		<?php echo $form->textField($model,'Fecha_Modificacion',array( 'size'=>45,'maxlength'=>45 ,'class'=>'form-control')); ?>
	</div>

	
	<div class=" col-md-12 buttons" align="center" >
		<?php echo CHtml::submitButton('Buscar',array("class"=>'btn btn-primary btn-large')); ?>
		</br>
	</div>

</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->