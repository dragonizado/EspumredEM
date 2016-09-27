<?php
/* @var $this PedidoController */
/* @var $dataProvider CActiveDataProvider */
$tipo=Yii::app()->session['tipo'];
$tipo = strtolower($tipo);
$tipo=ucfirst($tipo);
if ($tipo=="Almohadas y protector") {
	$tipo="AlmohadasProtector";
}
if ($tipo=="Base cama") {
	$tipo="Basecama";
}

?>
	
</div>
<?php $this->renderPartial('pdf'.$tipo, array(
	'model'=>$model,	
)); ?>
