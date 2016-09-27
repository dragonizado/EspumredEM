<?php
/* @var $this InformacionempleadoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Informacionempleados',
);

/*$this->menu=array(
	array('label'=>'Create Informacionempleado', 'url'=>array('create')),
	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
);*/
$suma=0;
$moloEmpleadoGeneral=Informacionempleado::model()->findAll();
for ($i=0; $i <count($moloEmpleadoGeneral) ; $i++) { 
		if ($moloEmpleadoGeneral[$i]["estado"]=="ACTIVO") {
			$suma=$suma+1;
		}
}
?>

<h1>Informacionempleados</h1>
	<h2><b>Personal Activo: <?php echo CHtml::encode($suma); ?></b></h2> <br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
)); ?>

<script type="text/javascript">
  $(document).ready(function(){
    

$(".pdf").on("click",function agregarProducto (event){       
	 event.preventDefault();
	
	var id = $(this).attr('id');


?>



<script type="text/javascript">
  $(document).ready(function(){
    

$(".pdf").on("click",function agregarProducto (event){       
	 event.preventDefault();
	
	var id = $(this).attr('id');
	//alert(id);
	 
	 // $this->redirect(array('mostrarPlantilla','id'=>$model->id));
	  // var idProducto = $(this).attr('id');
	  // var nombreProducto = $(this).attr('nombreProducto');
	  // var precioProducto = $(this).attr('precioProducto');
	  // idTienda = $(this).attr('idTienda');

	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/guardarid", {id:id},      //url asignadas
	   function(data) {
	   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=observaciones/mostrarPlantilla");   //url asignada

	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla";

	    })
	  // .done(mostrarProductosEnCarrito);

	});

});



</script>