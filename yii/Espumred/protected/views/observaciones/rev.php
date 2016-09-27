<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */

// $this->breadcrumbs=array(
// 	'Informacionempleados'=>array('index'),
// 	'Manage',
// );

$this->menu=array(
	//array('label'=>'Listar Formatos', 'url'=>array('index')),
	//array('label'=>'Aceptacion de Formulario', 'url'=>array('Observaciones/_vistaPlantilla')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#observaciones-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Reviso y Aceptacion de Formulario<br> Condiciones Comerciales</h1>

<p>
<center>Bienvenido Señor Gerente de Espumas Medellin S.A.<br>
<center>Desde aqui, Puedes Ver los formularios enviados, Para su debida aceptacion y fecha de autorizacion.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario diligenciado por el asesor.<br>
Y en la opcion <img src="images/update.png">Podras Aceptar el Formulario.

</p>


<?php echo CHtml::link('Opciones  Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		
		
		'condicion',
		'observaciones',
		'fecha',
		
		
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/observaciones/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/observaciones/view&id=$data->id" )', // url de la acción 'update'
            //aqui viene boton eliminar//
            'deleteConfirmation'=>'Seguro que quiere eliminar el elemento?', // mensaje de confirmación de borrado
            'afterDelete'=>'$.fn.yiiGridView.update("admin-grid");', // actualiza el grid después de borrar
		),
	),
)); ?>
