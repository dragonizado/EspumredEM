<?php
/* @var $this RegistropersonalController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Registropersonals',
// );


?>

<h1>Salida Visitante</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
)); ?>


<script type="text/javascript">
  $(document).ready(function(){
    

$(".salida").on("click",function agregarProducto (event){       
	 event.preventDefault();
	
	var id = $(this).attr('id');
	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registropersonal/guardarid", {id:id},
	   function(data) {
	   		document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=registropersonal/guardar"; 
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	    })
	  // .done(mostrarProductosEnCarrito);

	});

});



</script>