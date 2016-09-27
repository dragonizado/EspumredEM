<?php





?>
<script type="text/javascript">
   //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
  event.preventDefault();
  
    // var idEliminar=this['value'];
      document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/admin";  
       
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
  <div class="col-md-12">
  <center><p class="note">Los campos con <span class="required">*</span> son requeridos</p><center>
    


 <?php if (Yii::app()->user->rol=='GerenteComercial'): ?>
  

  <div class="col-md-5">
      <?php echo $form->labelEx($model,'Gerente Comercial*'); ?>
      <?php echo $form->dropDownList($model,'gerente_comercial',array('Juan Carlos Rios Gómez'=>'Juan Carlos Rios Gómez',
      ),array('id'=>'gerente_comercial','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
        
       <?php echo $form->error($model,'gerente_comercial'); ?>  
  </div>


  <div class="col-md-5">  
        <?php echo $form->labelEx($model,'Fecha Autorizacion* '); ?><br>
        <?php 
         /*este metodo de abajo funciona para crear un calendario mas adecuado y armonioso*/
                          if ($model->fechautorizacion != '') {
                                      $model->fechautorizacion = date('d-m-Y', strtotime($model->fechautorizacion));
                                  }
                            //forma de mostrar un calendario mas elegante en el formulario.
                                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                      'model' => $model,
                                      'attribute' => 'fechautorizacion',
                                      'value' => $model->fechautorizacion,
                                      'language' => 'es',
                                      'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'fechautorizacion'),
                                      'options' => array(
                                          'autoSize' => true,
                                          'defaultDate' => $model->fechautorizacion,
                                          'dateFormat' => 'yy-mm-dd',
                                          'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
                                          'buttonImageOnly' => false,
                                          'buttonText' => 'Fecha',  
                                          'selectOtherMonths' => true,
                                          'showAnim' => 'slide',
                                          'showButtonPanel' => true,
                                          'showOn' => 'button',
                                          'showOtherMonths' => true,
                                          'changeMonth' => 'true',
                                          'changeYear' => 'true',
                                           //'yearRange'=>'3000',
                                          'minDate' => '0Y',   //fecha minima
                                          //'maxDate' => "+120Y",//fecha maxima

                                       ),
                                     ));
                     
                                   ?>
                                    <?php echo $form->error($model,'fechautorizacion'); ?>
                            </div>

    <?php endif ?>
  
  <?php if (Yii::app()->user->rol=='GerenteCartera'): ?>


    <div class="col-md-5">
      <?php echo $form->labelEx($model,'Gerente Cartera*'); ?>
      <?php echo $form->dropDownList($model,'gerente_cartera',array('Luis Alfonso Ortega Almario'=>'Luis Alfonso Ortega Almario',
      ),array('id'=>'gerente_cartera','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
        
       <?php echo $form->error($model,'gerente_cartera'); ?>  
    </div>
    

  <div class="col-md-5">  
        <?php echo $form->labelEx($model,'Fecha Autorizacion* '); ?><br>
        <?php 
         /*este metodo de abajo funciona para crear un calendario mas adecuado y armonioso*/
                          if ($model->fechautorizacion1 != '') {
                                      $model->fechautorizacion1 = date('d-m-Y', strtotime($model->fechautorizacion1));
                                  }
                            //forma de mostrar un calendario mas elegante en el formulario.
                                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                      'model' => $model,
                                      'attribute' => 'fechautorizacion1',
                                      'value' => $model->fechautorizacion1,
                                      'language' => 'es',
                                      'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'fechautorizacion1'),
                                      'options' => array(
                                          'autoSize' => true,
                                          'defaultDate' => $model->fechautorizacion1,
                                          'dateFormat' => 'yy-mm-dd',
                                          'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
                                          'buttonImageOnly' => false,
                                          'buttonText' => 'Fecha',  
                                          'selectOtherMonths' => true,
                                          'showAnim' => 'slide',
                                          'showButtonPanel' => true,
                                          'showOn' => 'button',
                                          'showOtherMonths' => true,
                                          'changeMonth' => 'true',
                                          'changeYear' => 'true',
                                           //'yearRange'=>'3000',
                                          'minDate' => '0Y',   //fecha minima
                                          //'maxDate' => "+120Y",//fecha maxima

                                       ),
                                     ));
                     
                                   ?>
                                    <?php echo $form->error($model,'fechautorizacion1'); ?>

                            </div>

  <?php endif ?>

 
  
  <?php if (Yii::app()->user->rol=='Gerente'): ?>

    <div class="col-md-4">
      <?php echo $form->labelEx($model,'Gerente General*'); ?>
      <?php echo $form->dropDownList($model,'gerente_general',array('Raúl Ignacio Vergara Kerguelen'=>'Raúl Ignacio Vergara Kerguelen',
      ),array('id'=>'gerente_general','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
        
       <?php echo $form->error($model,'gerente_general'); ?>  
    </div>



    <div class="col-md-5">  
        <?php echo $form->labelEx($model,'Fecha Autorizacion* '); ?><br>
        <?php 
         /*este metodo de abajo funciona para crear un calendario mas adecuado y armonioso*/
                          if ($model->fechautorizacion2 != '') {
                                      $model->fechautorizacion2 = date('d-m-Y', strtotime($model->fechautorizacion2));
                                  }
                            //forma de mostrar un calendario mas elegante en el formulario.
                                  $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                                      'model' => $model,
                                      'attribute' => 'fechautorizacion2',
                                      'value' => $model->fechautorizacion2,
                                      'language' => 'es',
                                      'htmlOptions' => array('readonly' => "readonly", 'class'=>'form-control', 'id'=>'fechautorizacion2'),
                                      'options' => array(
                                          'autoSize' => true,
                                          'defaultDate' => $model->fechautorizacion2,
                                          'dateFormat' => 'yy-mm-dd',
                                          'buttonImage' => Yii::app()->baseUrl . '/images/caalendar.jpg',
                                          'buttonImageOnly' => false,
                                          'buttonText' => 'Fecha',  
                                          'selectOtherMonths' => true,
                                          'showAnim' => 'slide',
                                          'showButtonPanel' => true,
                                          'showOn' => 'button',
                                          'showOtherMonths' => true,
                                          'changeMonth' => 'true',
                                          'changeYear' => 'true',
                                           //'yearRange'=>'3000',
                                          'minDate' => '0Y',   //fecha minima
                                          //'maxDate' => "+120Y",//fecha maxima

                                       ),
                                     ));
                     
                                   ?>
                                    <?php echo $form->error($model,'fechautorizacion2'); ?>                      
                  <?php endif ?>
                             
                   </div>
            
    <br>
    <div class="buttons col-md-24" align="center">
    <br><br><br><br>
      
       <?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
       <?php echo CHtml::submitButton($model->isNewRecord ? 'Aceptar' : 'Aceptar', array("class"=>"btn btn-primary btn-large")); ?>
      <br><br><br>
      </div>
      </div>

      <?php $this->endWidget(); ?>
     </div>
   <div class="col-md-24">
  
  </div>

  </div><!-- form -->                            