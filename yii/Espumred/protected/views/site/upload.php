
<script type="text/javascript">
$(document).on("click", "#retroceder", function (event){
    event.preventDefault();
    
   document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/create";  
    


<!--//--------------------- Empieza funcion de Envio de Correo----------------!-!-->--->>>---->>>----

});

 </script>

   <div class="yiiForm">


    <?php
    /** @var BootActiveForm $form */
    $form = $this->beginWidget('CActiveForm', array(
        'id'=>'observaciones-form',
        'enableAjaxValidation' => true,
        'action' => Yii::app()->request->baseUrl . '/index.php?r=observaciones/uploadProfilePicture',
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false),
        'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data')
    ));


  $UploadFormModel = new UploadForm;

  
    ?>
    

    <?php
    
    $id=4;

                            
    //echo $form->hiddenField($UploadFormModel, "id", array("value" => $UploadFormModel->id));
   ?>

        <br/>
        <div align="center" >
           <?php echo CHtml::submitButton('Enviar', array('class' => 'btn')); ?>
           <?php echo CHtml::submitButton('Atras', array('class' => 'btn','id'=>'retroceder')); ?>  
        </div>
        


    </div>
   <div class="col-md-4">
  </div>

    <?php $this->endWidget(); ?>


</div>