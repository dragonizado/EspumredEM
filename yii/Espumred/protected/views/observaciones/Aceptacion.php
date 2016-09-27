<?php
/* @var $this PedidoController */
/* @var $dataProvider CActiveDataProvider */

?>
<script type="text/javascript">
	 //funcion para regresar ala ventana anterior al darle click en retroceder
 $(document).on("click", "#retroceder", function (event){
 	event.preventDefault();
 	
 		// var idEliminar=this['value'];
	    document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/admin";  
			 
   //        $(this).parent().remove();
 });  
</script>

<h1 align="center">Aceptada <?php echo $model->condicion; ?></h1>
</div>

  <?php $this->renderPartial('_vistaAceptacion', array(
	'model'=>$model,	

)); ?>