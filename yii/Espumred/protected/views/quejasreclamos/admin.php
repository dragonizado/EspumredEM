<?php
/* @var $this CartaremisoraController */
/* @var $model Cartaremisora */

// $this->breadcrumbs=array(
// 	'Cartaremisoras'=>array('index'),
// 	'Administrador',
// );

$this->menu=array(
	//array('label'=>'Listar Cartaremisora', 'url'=>array('index')),
	//array('label'=>'Crear Cartaremisora', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#quejasreclamos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<center><h1>Administrador de Quejas,Reclamos y Sugerencias</h1><center>

<p>
                           <center>Bienvenido<br>
<center>Desde aqui, Puedes Ver los formularios diligenciados.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario diligenciado por el Cliente.<br>
Y en la opcion <img src="images/lapiz.png.png">Podras Modificar el formulario de quejas,reclamos y sugerencias(solo si estas autorizado).
</p>

<?php echo CHtml::link('Opciones avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'quejasreclamos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(

		'codigo',
		'NombreApellido',
		'Empresa',
		'Hechos',
		
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
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/QuejasReclamos/update&id=$data->id")', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/QuejasReclamos/view&id=$data->id" )', // url de la acción 'update'
            //espacio de funcion de eliminacion de condicion comercial//--->
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
