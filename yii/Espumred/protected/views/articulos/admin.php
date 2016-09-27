<?php
/* @var $this ArticulosController */
/* @var $model Articulos */

$this->breadcrumbs=array(
	'Articulos'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Producto', 'url'=>array('index')),
	array('label'=>'Crear Producto', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Productos</h1>

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
	'id'=>'articulos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'Nombre_Articulo',
		'Descripcion',
		'Valor',
		'Fecha_Creacion',
		'Fecha_Modificacion',
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/articulos/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/articulos/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/articulos/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
