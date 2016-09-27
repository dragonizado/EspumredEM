<?php
/* @var $this ClientesController */
/* @var $model Clientes */

$this->breadcrumbs=array(
	'clientes'=>array('index'),
	'Administrador',
);

$this->menu=array(
	//array('label'=>'Listar Cliente', 'url'=>array('index')),
	array('label'=>'Crear Cliente', 'url'=>array('create')),
	//array('label'=>'Mostrar Clientes', 'url'=>array('clientes/admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#clientes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrador de  Clientes</h1>
Bienvenidos Niyereth y Wilmer, Aqui podran visualizar y/o añadir Clientes con su respectivo Codigo.

</p>

<?php echo CHtml::link('Opciones Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'clientes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'cod',
		'nombreCliente',
		/*
		'Empresa',
		'Fecha_Creacion',
		'Fecha_Modificacion',
		*/
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/clientes/update&id=$data->cod" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/clientes/view&id=$data->cod" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/clientes/eliminar&id=$data->cod")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
