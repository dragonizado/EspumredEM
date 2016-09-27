<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */

// $this->breadcrumbs=array(
// 	'Cartaremisoras'=>array('index'),
// 	'Administrador',
// );

$this->menu=array(
	//array('label'=>'Listar Cartaremisora', 'url'=>array('index')),
	array('label'=>'Crear Cartaremisora', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cartaremisora-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de Cartaremisoras</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>

<?php echo CHtml::link('Opciones avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cartaremisora-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'consecutivo',
		'idArticulo',
		'idCliente',
		'idUsuario',
		'Direccion',
		'Telefono',
		/*
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
		*/
		array(
			'class' => 'CButtonColumn',
             'template'=>'{update}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/cartaremisora/update&id=$data->id" )', // url de la acción 'update'
            // 'viewButtonUrl'=>'Yii::app()->createUrl("/cartaremisora/view&id=$data->id" )', // url de la acción 'update'
            // 'deleteButtonUrl'=>'Yii::app()->createUrl("/cartaremisora/eliminar&id=$data->id")', // url de la acción 'delete'
            // 'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            // 'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
