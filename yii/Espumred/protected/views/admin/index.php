<?php
/* @var $this InformacionempleadoController */
/* @var $dataProvider CActiveDataProvider */

// $this->breadcrumbs=array(
// 	'Informacionempleados',
// );

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
<style media="screen">
	.footermediaQuery{
		
		width:100%;
		bottom:0px;
	}
	.footermediaQuerym{
		margin-top:9.5%;
	}
	.caja{
		box-shadow: 4px 4px 4px rgba(0,0,0,0.05) !important;
	}
	.table>thead>tr>th,
	.table>tbody>tr>th,
	.table>tfoot>tr>th,
	.table>thead>tr>td,
	.table>tbody>tr>td,
	.table>tfoot>tr>td
	{
		padding: 8px !important;
		line-height: 1.42857143 !important;
		vertical-align: top !important;
		border-top: 1px solid #ddd !important;
	}

	.table-bordered>thead>tr>th,
	.table-bordered>tbody>tr>th,
	.table-bordered>tfoot>tr>th,
	.table-bordered>thead>tr>td,
	.table-bordered>tbody>tr>td,
	.table-bordered>tfoot>tr>td
	{
    border: 1px solid #ddd;
	}
	.table-striped>tbody>tr:nth-child(odd)>td,
	.table-striped>tbody>tr:nth-child(odd)>th
	{
    background-color: rgba(243, 103, 22, 0.11) !important;
	}
	.radius{
		border-radius: 3px;
		margin-right: 4px;
	}
	.paginate ul li{
		list-style: none;
		margin: 5px;
		padding: 4px;
		background-color: white;
	}
	.paginate ul{
		display: flex;
		flex-direction: row;
	}

	

	.pagination>.active>a, .pagination>.active>span, .pagination>.active>a:hover, .pagination>.active>span:hover, .pagination>.active>a:focus, .pagination>.active>span:focus {
    z-index: 3;
	    color: #fff;
	    cursor: default;
	    background-color: #337ab7;
	    border-color: #337ab7;
}
	nav ul li a{
		cursor: pointer;
	}

</style>
<div class="panel ">
	<div class="panel-body">
		<h1 style="text-align:center; margin:0;">Información de empleados <div class="btn" style="background-color:black;color:white; right:3%; position:absolute;">Personal Activo: <?php echo CHtml::encode($suma); ?></div></h1>
	</div>
</div>

<!-- <div class="panel " style="width:350px;">
	<div class="panel-body">
		<center><img src="<?php echo Yii::app()->baseUrl;?>/images/loading_Redondo_1.png" alt="Cargando contenido.." width="120px"></center>
		<p>
			Cc: <br>
			Nombre Empleado: <br>
			Codigo Nomina: <br>
			Estado: <br>
			Carnet: <br>
			Area: <br>
			Cargo: <br>
			Fecha de inicio del contrato: <br>
		</p>
		<center><button>ver hoja de vida</button></center>
	</div>
</div> -->

<!-- Rederizar todas las tarjetas con la informacion de los empleados -->
<div class="contenidos" style="display:flex; flex-direction:row; flex-wrap:wrap; justify-content: space-between;">
	<?php $this->ActionAjaxPaginations();?>
</div>


	<!-- <h2><b>Personal Activo: <?# echo CHtml::encode($suma); ?></b></h2> <br> -->
<?php 
// $this->widget('zii.widgets.CListView', array(
// 	'dataProvider'=>$dataProvider,
// 	'itemView'=>'_view',
// 	'pager'=>array("htmlOptions"=>array("class"=>"pagination"))
// )); 
?>








<script type="text/javascript">
  $(document).ready(function(){
    $('body').css({'background-color':'#EBEEEE'});
    $('.panel').addClass('caja');

$(".pdf").on("click",function agregarProducto (event){       
	 event.preventDefault();
	
	var id = $(this).attr('id');
	//alert(id);
	 
	// $this->redirect(array('mostrarPlantilla','id'=>$model->id));
   // var idProducto = $(this).attr('id');
  // var nombreProducto = $(this).attr('nombreProducto');
 // var precioProducto = $(this).attr('precioProducto');
// idTienda = $(this).attr('idTienda');

	  $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/guardarid", {id:id},
	   function(data) {
	   		window.open ("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"); 
	   		// si quiere el archivo en la misma pagina document.location.href ="<?php echo Yii::app()->request->baseUrl ?>/index.php?r=informacionEmpleado/mostrarPlantilla"; 
	    })
	  // .done(mostrarProductosEnCarrito);

	});



	// $('.paginateitem').click(function(){
		
		
		
	// });

});

</script>