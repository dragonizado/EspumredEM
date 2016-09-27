<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */

$this->breadcrumbs=array(
	'Cartaremisoras'=>array('index'),
	$model->consecutivo,
);

$this->menu=array(
	//array('label'=>'Listar Cartaremisora', 'url'=>array('index')),
	//array('label'=>'Crear Cartaremisora', 'url'=>array('create')),
	array('label'=>'Imprimir Cartaremisora', 'url'=>array('update', 'id'=>$model->id)),
	//array('label'=>'Eliminar Cartaremisora', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrador Cartaremisora', 'url'=>array('admin')),
);
?>

<h1>Vista Cartaremisora #<?php echo $model->consecutivo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'idArticulo',
		'idCliente',
		'idUsuario',
		'Direccion',
		'Telefono',
		'Ciudad',
		'Flete_Pagadero',
		'Numero_Factura',
		'Cantidad_Articulo',
		'Valor_Unitario_Articulo',
		'Valor_Total',
		'Numero_Bultos',
		'Fecha_Creacion',
		'Fecha_Modificacion',
		'descripcion',
		'consecutivo',
	),
)); ?>
