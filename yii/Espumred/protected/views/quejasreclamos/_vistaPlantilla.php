<?php 
//formas para optener el dato particulas filtrandolo por un id

$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['codigo']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['NombreApellido']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['Empresa']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['Hechos']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['Documentacion']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['Fecha']);
$modeloQuejasReclamos=QuejasReclamos::model()->findByPk($model['Firma']);
$id="0";
?>

 <style type="text/css">    
	table { 

}
</style>
 

<tbody>
     	 	      
    <table class="table table-bordered" >
    	<thead>
    		<tr align="center" >

		<td class="col-md-2"><img type="button" value="electr&oacute;nico" onclick="window.print();" src="<?php echo Yii::app()->baseUrl;?>/images/logoLimpio.jpg" width='150px' height="50px">
    
		<p><td class="col-md-3" align="center"><center>FORMATO DE QUEJAS, RECLAMOS Y SUGERENCIAS<center></p>

		<td class="col-md-2" align="center">Codigo: FSC-02<br>Version:01<br>Fecha: 13/06/2016</td>


<!-- empieza el cuerpo de la carta remisora-->

<table class="table table-bordered" id="border" >
      <tbody>
         <tr>
			<td colspan="1">
			Código del Asesor: <?php echo $model["codigo"]; ?>
			</tr>
           <td colspan="1" >
			Nombre y Apellido: <?php echo CHtml::encode($model['NombreApellido']); ?>
			</td>

 <table class="table table-bordered" id"border">
        
 <table "table table-bordered"> 
 <p>      
 Este formulario es válido para reclamos y sugerencias referidas a las espumas de Espumas Medellín S.A. (Este formato no aplica para colchones o muebles) En caso de ser un reclamo, devolución o garantía se debe adjuntar por lo menos una muestra de espuma de 30cmx30cm,
 la muestra debe estar en perfecto estado, sin signos de deterioro físico, sin pegantes ni telas adheridas, la muestra no debe haber sido alterada por procesos que cambien sus propiedades como procesos de compresión. La muestra debe ser plenamente identificada con el número de lote, de no cumplirse lo anteriormente citado el reclamo, devolución o garantía no podrá ser atendido. Por favor complemente todos los datos. Este documento sin firma no es válido. *La respuesta a la solicitud se dará en 5 días hábiles a partir de la fecha de recepción.	
</p>
   
    <table class="table table-bordered" >   

			<td colspan="2">
			Empresa: <?php echo CHtml::encode($model['Empresa']); ?>
			</tr>
			<td colspan="2">
			Lote: <?php echo CHtml::encode($model['Lote']); ?>
		    </td>
            <table class="table table-bordered" >   


    <td colspan="2">
    Hechos que motivan a la Garantía/ Devolución /Sugerencia: <?php echo CHtml::encode($model['Hechos']); ?>
    </td>
    <table class="table table-bordered" >
               
        <td colspan="50" >
		Documentación o muestras que se adjuntan (Se debe identificar el lote de la espuma): <?php echo CHtml::encode($model['Documentacion']); ?>
			</td>
    <table class="table table-bordered" >

			<td colspan="3">
			Fecha de Solicitud: <?php echo CHtml::encode($model['Fecha']); ?>
			</td>
                        
    <table class="table table-bordered" >

    	<td colspan="3">
			 
    Firma:</br><?php echo CHtml::encode($model['NombreCliente']); ?> 
                                      
        <br><br>

			</td>
		</tr>
      </tbody>
    </table>

  <P>CONTROL DE MODIFICACIONES</P>
  <table class="table table-bordered" id="border" >
      <tbody>
         <tr>
			<td colspan="3">
			<center><p>Version:</p><center>

			<center><td colspan="0"><center>
			<p>Fecha</p> 

           <td colspan="0" >
		    <center><p>Descripcion de los cambios efectuados</p><center>
		</tr>

		<td colspan="3" >
			<center><p>01</p><center>

	    <td colspan="0" >
	    	
		   <center><p>13 de Junio 2016</p><center>

	    <td colspan="0" >

		  <center><p>Version inicial del documento</p><center>	
		
			</td>
			

 <table class="table table-bordered" id"border">

<?php
/* @var $this ArticulosPrestamoClienteController */
/* @var $model ArticulosPrestamoCliente */
/* @var $form CActiveForm */
