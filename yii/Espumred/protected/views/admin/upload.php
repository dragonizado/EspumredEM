<div class="yiiForm">

    <?php
    /** @var BootActiveForm $form */
    $form = $this->beginWidget('CActiveForm', array(
        'id'=>'informacionempleado-form',
        'enableAjaxValidation' => true,
        'action' => Yii::app()->request->baseUrl . '/index.php?r=informacionempleado/uploadProfilePicture',
        'clientOptions' => array('validateOnSubmit' => true, 'validateOnChange' => false),
        'htmlOptions' => array('class' => 'well', 'enctype' => 'multipart/form-data')
    ));

    $UploadFormModel = new UploadForm;
    $UploadFormModel->idProducto = $idProducto;
    ?>



    <div class="col-md-4 simple" >

<?php
echo $form->fileField($UploadFormModel, 'image', array('accept' => 'image/jpg'));
echo $form->hiddenField($UploadFormModel, "idProducto", array("value" => $UploadFormModel->idProducto));
?>
        <br/>
        <div >
           <?php echo CHtml::submitButton('Upload', array('class' => 'btn')); ?> 
        </div>
        



    </div>

    <?php $this->endWidget(); ?>

</div>
