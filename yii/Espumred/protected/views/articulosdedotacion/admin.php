<?php
/* @var $this ArticulosdedotacionController */
/* @var $model Articulosdedotacion */

$this->breadcrumbs=array(
	'Articulosdedotacions'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Articulosdedotacion', 'url'=>array('index')),
	array('label'=>'Crear Articulosdedotacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#articulosdedotacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador Articulos de dotacion</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>
<?php echo CHtml::link('Obciones Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'articulosdedotacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'nombre',
		'tipoDotacion',
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/articulosdedotacion/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/articulosdedotacion/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/articulosdedotacion/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
