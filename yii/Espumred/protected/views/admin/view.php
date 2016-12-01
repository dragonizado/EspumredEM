<?php
/* @var $this InformacionempleadoController */
/* @var $model Informacionempleado */

// $this->breadcrumbs=array(
// 	'Informacionempleados'=>array('index'),
// 	$model->id,
// );

// $this->menu=array(
// 	array('label'=>'List Informacionempleado', 'url'=>array('index')),
// 	array('label'=>'Create Informacionempleado', 'url'=>array('create')),
// 	array('label'=>'Update Informacionempleado', 'url'=>array('update', 'id'=>$model->id)),
// 	array('label'=>'Delete Informacionempleado', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
// 	array('label'=>'Manage Informacionempleado', 'url'=>array('admin')),
// );
?>

<h1>Insertar foto empleado #<?php echo $model->id; ?></h1>

<?php 
 $form = new UploadForm;
	         $formData =  $this->renderPartial('upload', array('form'=>$form,'idProducto'=> $model->id),true); 
      		 	 
  			
      		// $formData = str_replace(array("\n", "\r", "\t"), ' ', $formData);
      		// $formData = preg_replace('/(\s+)/', ' ', $formData);
                 
      		 echo "".$formData."";
             
?>
