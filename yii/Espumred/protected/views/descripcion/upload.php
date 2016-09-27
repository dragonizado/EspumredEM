
<script type="text/javascript">
$(document).on("click", "#noSubir", function (event){
    event.preventDefault();
    
   document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=facturacion/noSubirFoto";  
    // var desicion=this['value'];
    // if (desicion=="Activo") {
    //  $("#element").hide();
    // };
    // if (desicion=="Retirado") {
    //  $("#element").show();
    // };
       
});


</script>

   <div class="yiiForm">


    <?php
    /** @var BootActiveForm $form */
    $form = $this->beginWidget('CActiveForm', array(
        'id'=>'observaciones-form',
        'enableAjaxValidation' => true,
        'action' => Yii::app()->request->baseUrl . '/index.php?r=Observaciones/uploadProfilePicture',
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false),
        'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data')
    ));


     $factura=Observaciones::model()->findAll();
     $factura=count($factura);


    $UploadFormModel = new UploadForm;

    
    ?>

     
 <!--funcionamiento de montar fotos--> <!--se utilizara para montar firma escaneada-->

   <?php
   echo $form->fileField($UploadFormModel, 'image', array('accept' => 'image/jpg'));     


    ?>
        <br/>
        <div >

           <?php echo CHtml::submitButton('Upload', array('class' => 'btn', 'id'=>'Subir')); ?>
           
           <?php echo CHtml::submitButton('NoSubir', array('class' => 'btn','id'=>'noSubir')); ?> 


        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>
