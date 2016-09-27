<?php



?>

<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();

});
 	
 		// var idEliminar=this['value'];
	    document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=quejasreclamos/admin";  
			 
   //        $(this).parent().remove();
 		
});
</script>

 <?php echo CHtml::submitButton(' << Atras', array("class"=>"btn btn-primary btn-large" ,"id"=>"retroceder")); ?><h1 align="center">Formato Quejas y Reclamos<br>
  #<?php echo $model->codigo; ?></h1>

 <?php $this->renderPartial('mostrarPlantilla', array('model'=>$model)); ?>

