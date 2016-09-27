<?php

$Registro=Yii::app()->session['Registro'];

//var_dump($Registro);


?>

<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
			document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=condicionescomerciales/create";  
			 
        //$(this).parent().remove();

});

</script>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'descripcion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>



<table class="col-md-33" align="center" >
<tbody>


<div class="col-md-12">
	 <div class="col-md-4" >
		<?php echo $form->labelEx($model,'Codigo Cliente'); ?>
	    <?php echo $form->textField($model,'codigo',array('size'=>0,'id'=>"cod",'maxlength'=>45 ,'class'=>'form-control' ,'value'=>$Registro[0]['cod'])); ?>
		<?php echo $form->error($model,'codigo'); ?>
	</div>

    <td>
    	
  	
	<div align="center" class="buttons">
			<?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?>
		  <?php echo CHtml::submitButton($model->isNewRecord ? 'Siguiente >>' : 'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>


       <td colspan="1">
              

	        </div> 
	        </div>   
			</td>
        </tr>
      </tbody>
    </table>

  <table class="table table-bordered ">


<p id="demo"></p>
<?php $this->endWidget(); ?>

</div><!-- form -->