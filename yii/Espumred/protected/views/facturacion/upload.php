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
        'id'=>'informacionempleado-form',
        'enableAjaxValidation' => true,
        'action' => Yii::app()->request->baseUrl . '/index.php?r=Facturacion/uploadProfilePicture',
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false),
        'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data')
    ));

    $factura=Facturacion::model()->findAll();
    $factura=count($factura);

    $UploadFormModel = new UploadFormFactura;
    $UploadFormModel->id =$factura;  //id de facturacion//
    ?>

<h1 align="center">Subir factura</h1><br><br>
<div class="col-md-4"> </div>
    <div class="col-md-4 simple">

<?php
$id=4;
echo $form->fileField($UploadFormModel, 'image', array('accept' => 'image/jpg','accept' => 'image/png','accept' => 'image/pdf'));

echo $form->hiddenField($UploadFormModel, "id", array("value" => $UploadFormModel->id));
?>
        <br/>
        <div align="center" >
           <?php echo CHtml::submitButton('Subir', array('class' => 'btn')); ?>
           <?php echo CHtml::submitButton('NoSubir', array('class' => 'btn','id'=>'noSubir')); ?>  
        </div>
        


    </div>
<div class="col-md-4">
</div>


    <?php $this->endWidget(); ?>

</div>
