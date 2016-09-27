<?php
/* @var $this DotacionController */
/* @var $model Dotacion */
/* @var $form CActiveForm */
?>
<script type="text/javascript">
	//funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=contrato/create";  
			 
   //          $(this).parent().remove();

});

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dotacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	

	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-4"></div>
<div class="col-md-4">
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
	<!-- <div >
		<?php //echo $form->labelEx($model,'id'); ?>
		<?php //echo $form->textField($model,'id',array('id'=>'paredes','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
		<?php //echo $form->error($model,'id'); ?>
	</div> -->

	<div >
		<?php echo $form->labelEx($model,'camisa*'); ?>
		
		<?php /*este metodo de abajo funciona para buscar todos las camisas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->camisa !='') {
                             $value = ($model->camisa);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'camisa', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'camisa',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarCamisa'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_camisa").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_camisa").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'camisa'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'calzado*'); ?>
		
		<?php /*este metodo de abajo funciona para buscar todos las calzado los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->calzado !='') {
                             $value = ($model->calzado);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'calzado', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'calzado',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('Listarcalzado'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_calzado").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_calzado").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'calzado'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'pantalon*'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las pantalon los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->pantalon !='') {
                             $value = ($model->pantalon);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'pantalon', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'pantalon',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarPantalon'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_pantalon").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_pantalon").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'pantalon'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'delantal*'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las delantal los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->delantal !='') {
                             $value = ($model->delantal);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'delantal', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'delantal',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarDelantal'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_delantal").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_delantal").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'delantal'); ?>
	</div>

	<div >
		<?php echo $form->labelEx($model,'overol*'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las overol los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->overol !='') {
                             $value = ($model->overol);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'overol', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'overol',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarOverol'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_overol").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_overol").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'overol'); ?>
	</div>


	<div >
		<?php echo $form->labelEx($model,'otrasDotaciones*'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las otrasdotaciones los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->otrasDotaciones !='') {
                             $value = ($model->otrasDotaciones);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'otrasDotaciones', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'otrasDotaciones',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarOtrasDotaciones'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Dotacion_otrasDotaciones").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Dotacion_otrasDotaciones").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'otrasDotaciones'); ?>
	</div>

	<div align="center"  class="buttons">
		<br>
		
		 <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Siguiente >>', array("class"=>"btn btn-primary btn-large")); ?>
	</div>
	</div>

	<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->