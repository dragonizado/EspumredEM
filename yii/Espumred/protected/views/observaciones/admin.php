<?php


//$this->menu=array(
	//array('label'=>'Listar Formatos', 'url'=>array('index')),
	//array('label'=>'Aceptacion de Formulario', 'url'=>array('Observaciones/_vistaPlantilla')),
//);

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

<?php if (Yii::app()->user->rol=='Gerente'||Yii::app()->user->rol=='GerenteComercial'||Yii::app()->user->rol=='GerenteCartera'): ?>

<h1 align="center">Reviso y Aceptacion de Formulario<br> Condiciones Comerciales</h1>
<p>
Bienvenido Señor Gerente de Espumas Medellin S.A.<br>
Desde aqui, Puedes Ver los formularios enviados, Para su debida aceptacion y fecha de autorizacion.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario diligenciado por el asesor.<br>
Y en la opcion<img src="images/lapiz.png.png">Podras Aceptar el Formulario.<br>
</p>
<?php endif ?>


<?php if (Yii::app()->user->rol=='Comercio'): ?>
<h1 align="center">Revisar Condicion Comercial Aceptada</h1>	
<p>
<center>Bienvenido Señor@s Asesor@s de Espumas Medellin S.A.<br>
<center>Desde aqui Puedes Ver los formularios Aceptados por los gerentes Espumas Medellin S.A.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario aceptado por los gerentes.<br>
Para realizar la busqueda de la condicion comercial, busca por la "observacion" que asignastes a la condicion diligenciada.<br>
</p>
<?php endif ?>



<?php if (Yii::app()->user->rol=='Revisoria'||Yii::app()->user->rol=='ServicioCliente'): ?>
<h1 align="center">Revisar Condicion Comercial Aceptada y/o diligenciada</h1>	
<p>
<center>Bienvenidos<br>
<center>Desde aqui, Puedes Ver los formularios Aceptados y aun sin aceptar por los gerentes, Y diligenciados por los asesores.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario aceptado por los gerentes.<br>
E igualmente las condiciones realizadas por los Asesores<br>

</p>
<?php endif ?>
 
 

<?php if (Yii::app()->user->rol=='Asesor'): ?>
<h1 align="center">Revisar Condicion Comercial Aceptada</h1>	
<p>
<center>Bienvenido Señor@s Asesor@s de Espumas Medellin S.A.<br>
<center>Desde aqui, Puedes Ver los formularios Aceptados, Por los señores Gerentes de Espumas Medellin S.A.<br>
En la Opcion <img src="images/view.png">Puedes Ver el formulario aceptado por los gerentes.<br>
Para realizar la busqueda de la condicion comercial, busca por el codigo del cliente.<br>
</p>
<?php endif ?>



<!--asignacion de permisos por roles a grid administrativo-->

	
<?php echo CHtml::link('Opciones  Avanzadas','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->



<!--Rol Comercio y Asesores-->

<?php if (Yii::app()->user->rol=='Comercio'||Yii::app()->user->rol=='Asesor'||Yii::app()->user->rol=='ServicioCliente'): ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(

	    'NombreCliente',
		'gerente_comercial',
		'gerente_cartera',
		'gerente_general',
		'fecha',
		
		array(
			'class' => 'CButtonColumn',
            //'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/observaciones/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/observaciones/view&id=$data->id" )', // url de la acción 'update'
            //aqui viene boton eliminar//            
		),
	),
)); ?>

<?php endif ?>

<!---->


<?php if (Yii::app()->user->rol=='Gerente'||Yii::app()->user->rol=='GerenteComercial'||Yii::app()->user->rol=='Revisoria'): ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'observaciones-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
	
		'NombreCliente',
		'gerente_comercial',
		'gerente_cartera',
		'gerente_general',
		'fecha',
         
		array(
			'class' => 'CButtonColumn',
            // 'template'=>'{delete}{update}{accion_nueva}', // botones a mostrar
            'updateButtonUrl'=>'Yii::app()->createUrl("/observaciones/update&id=$data->id" )', // url de la acción 'update'
            'viewButtonUrl'=>'Yii::app()->createUrl("/observaciones/view&id=$data->id" )', // url de la acción 'update'
            //aqui viene boton eliminar//
		),
	),
)); ?>


<?php endif ?>
<!---->

