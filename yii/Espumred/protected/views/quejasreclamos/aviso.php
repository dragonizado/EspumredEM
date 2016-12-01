<script type="text/javascript">
$(document).on("click", "#Avanzar", function (event){
    event.preventDefault();
    
   document.location.href = "<?php echo Yii::app()->request->baseUrl ?>/index.php?r=quejasreclamos/create";

});

</script>
 
<h1 align="center">Informacion importante.</h1>
<p>
Este formulario es válido para reclamos y sugerencias referidas a las espumas de Espumas Medellín S.A. (Este formato no aplica para colchones o muebles) En caso de ser un reclamo, devolución o garantía se debe adjuntar por lo menos una muestra de espuma de 30cmx30cm,
la muestra debe estar en perfecto estado, sin signos de deterioro físico, sin pegantes ni telas adheridas, la muestra no debe haber sido alterada por procesos que cambien sus propiedades como procesos de compresión. La muestra debe ser plenamente identificada con el número de lote, de no cumplirse lo anteriormente citado el reclamo, devolución o garantía no podrá ser atendido. Por favor complemente todos los datos. Este documento sin firma no es válido. *La respuesta a la solicitud se dará en 5 días hábiles a partir de la fecha de recepción.	
</p>

 <div align="center" >
         <?php echo CHtml::submitButton($model->isNewRecord ? 'Diligenciar': 'Guardar', array("class"=>"btn btn-primary btn-large","style"=>"margin-top:15px;",'id'=>'Avanzar')); ?>
</div>