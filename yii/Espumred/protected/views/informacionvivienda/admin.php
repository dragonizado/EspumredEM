<?php
/* @var $this InformacionviviendaController */
/* @var $model Informacionvivienda */

$this->breadcrumbs=array(
	'Informacionviviendas'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Informacionvivienda', 'url'=>array('index')),
	array('label'=>'Crear Informacionvivienda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacionvivienda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Administrador Informacion viviendas</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>

<?php echo CHtml::link('Opciones Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'informacionvivienda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'numeroDeHabitantes',
		'indiceHacimiento',
		'estrato',
		'tenenciaDeLaVivienda',
		'tipoDeVivienda',
		/*
		'numeroDeHabitacion',
		'cocina',
		'bañoComun',
		'bañoPrivado',
		'sala',
		'comedor',
		'salaComedor',
		'zonaDeRopa',
		'agua',
		'electricidad',
		'gas',
		'telefono',
		'internet',
		'televisionPorCable',
		'otros',
		'television',
		'equipoDeSonido',
		'lavadora',
		'estufa',
		'dvd',
		'microondas',
		'pc',
		'materiaDeLaCasa',
		*/
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/informacionvivienda/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/informacionvivienda/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/informacionvivienda/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
