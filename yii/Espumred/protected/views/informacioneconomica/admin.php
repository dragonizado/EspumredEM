<?php
/* @var $this InformacioneconomicaController */
/* @var $model Informacioneconomica */

$this->breadcrumbs=array(
	'Informacioneconomicas'=>array('index'),
	'Administrador',
);

$this->menu=array(
	array('label'=>'Listar Informacioneconomica', 'url'=>array('index')),
	array('label'=>'Crear Informacioneconomica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#informacioneconomica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Administrador Informacion economica</h1>

<p>
También puede escribir un operador de comparación (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación. 
</p>


<?php echo CHtml::link('Opciones  Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'informacioneconomica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'primerIngreso',
		'segundoIngreso',
		'otrosIngresos',
		'totalIngresos',
		'arriendo',
		/*
		'serviciosPublicos',
		'internet',
		'telefonia',
		'cable',
		'alimentacion',
		'transporte',
		'celular',
		'educacion',
		'vehiculo',
		'prestacionesComercial',
		'prestamosBancario',
		'hipoteca',
		'vestidoYCalzado',
		'recreacion',
		*/
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/informacioneconomica/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/informacioneconomica/view&id=$data->id" )', // url de la acción 'update'
            'deleteButtonUrl'=>'Yii::app()->createUrl("/informacioneconomica/eliminar&id=$data->id")', // url de la acción 'delete'
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
