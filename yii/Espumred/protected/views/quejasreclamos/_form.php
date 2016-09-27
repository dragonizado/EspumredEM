
<div class="form">

  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'quejasreclamos-form',
  // Please note: When you enable ajax validation, make sure the corresponding
  // controller action is handling ajax validation correctly.
  // There is a call to performAjaxValidation() commented in generated controller code.
  // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
    )); 
  ?>


  <?php echo $form->errorSummary($model); ?>
    

  <div class="col-md-12">
    <center>
      <p class="note">Los campos con <span class="required">*</span> son requeridos</p>
    </center>
    <div class="col-md-4" >      
      <?php echo $form->labelEx($model,'Codigo*'); ?>
      <?php echo $form->textField($model,'codigo' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'codigo', )); ?>
      <?php echo $form->error($model,'codigo'); ?>
    </div>
    <div class="col-md-4">
      <?php echo $form->labelEx($model,'NombreApellido*'); ?>
      <?php echo $form->textField($model,'NombreApellido' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'NombreApellido', )); ?>
      <?php echo $form->error($model,'NombreApellido'); ?>
    </div>
    <div class="col-md-4">
      <?php echo $form->labelEx($model,'Nombre Cliente*'); ?>
      <?php echo $form->textField($model,'NombreCliente' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'NombreCliente', )); ?>
      <?php echo $form->error($model,'NombreCliente'); ?>
    </div>
    <div class="col-md-4">
      <?php echo $form->labelEx($model,'Tipo de Nesecidad*'); ?>
      <?php echo $form->dropDownList($model,'Firma',array('laboratorio.medellin@espumasmedellin.com'=>'PETICIONES,QUEJAS,RECLAMOS Y SUGERENCIAS',
        ),array('id'=>'Firma','size'=>1,'maxlength'=>1 ,'class'=>'form-control')); ?>
      <?php echo $form->error($model,'Firma'); ?>              
    </div>
    <div class="col-md-4">
      <?php echo $form->labelEx($model,'Lote*'); ?>
      <?php echo $form->textField($model,'Lote' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'Lote', )); ?>
      <?php echo $form->error($model,'Lote'); ?>              
    </div>
    <div class="col-md-4">
      <?php echo $form->labelEx($model,'Empresa*'); ?>
      <?php echo $form->textField($model,'Empresa' ,array('size'=>45,'maxlength'=>45 ,'class'=>'form-control','id'=>'Empresa', )); ?>
      <?php echo $form->error($model,'Empresa'); ?>              
    </div>
    <div class="col-md-12 CTX">
      <center>
        <?php echo $form->labelEx($model,'Documentacion o muestras que se adjuntan (Se debe identificar el lote de la espuma)*'); ?>
      </center>
      <?php echo $form->textArea($model,'Documentacion' ,array('size'=>45,'maxlength'=>45,'class'=>'form-control','id'=>'Documentacion', )); ?>
      <?php echo $form->error($model,'Documentacion'); ?>
    </div> 
    <div class="col-md-12 CTX">
      <center>
        <?php echo $form->labelEx($model,'Hechos que motivan a la Garantia/ Devolucion /Sugerencia*'); ?>
      </center>
      <?php echo $form->textArea($model,'Hechos' ,array('size'=>900,'maxlength'=>900,'class'=>'form-control','id'=>'Hechos', )); ?>
      <?php echo $form->error($model,'Hechos'); ?>
    </div>
  </div>
  <div align="center" class="buttons">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente' : 'Guardar', array("class"=>"btn btn-primary btn-large","style"=>"margin-top:15px;")); ?>
    <br><br>
  </div>
  <div class="col-md-3"></div>
  <?php $this->endWidget(); ?>

 </div><!-- form -->

