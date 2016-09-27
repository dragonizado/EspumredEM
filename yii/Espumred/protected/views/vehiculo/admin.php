<?php
/* @var $this VehiculoController */
/* @var $model Vehiculo */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Administrador',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehiculo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Vehiculo</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>


<div class="search-form" >
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiculo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'placa',
		'modelo',
		'propietario',
		'conductor',
		'ayudante',
		array(
			'class' => 'CButtonColumn',
            //'template'=>'{update}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/vehiculo/update&id=$data->placa" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/vehiculo/view&id=$data->placa" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/vehiculo/eliminar&id=$data->placa")', // url de la acción 'delete'
             'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
