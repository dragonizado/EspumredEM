<?php
/* @var $this ProductocostosController */
/* @var $model Productocostos */

$this->breadcrumbs=array(
	'Productocostoses'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Productocostos', 'url'=>array('index')),
	array('label'=>'Crear Productocostos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#productocostos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>


<h1>Administrador  de Productos</h1>

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
	'id'=>'productocostos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'cod',
		'nombre',
		'medidas',
		'calibre',
		'precioMayoristas',
		'precioCorreria',
			array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/Productocostos/update&id=$data->cod" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/Productocostos/view&id=$data->cod" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/Productocostos/eliminar&id=$data->cod")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
