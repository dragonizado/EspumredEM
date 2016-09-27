<script type="text/javascript">
 $(document).ready(function(){
    $("#buscar").on("click",function (event){
         event.preventDefault();

	        if ($("#Extensiones_nombre").val()!=" ") {
	        			var id= $("#Extensiones_nombre").val();
         			   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=extensiones/cargar",{id: id},
					    function(data) {
					    	console.log(data);
					    	 var carritoActual = data;
					    	  var arrCarritoActual = $.parseJSON(carritoActual);
                          var form = "<form id='formulariocarrito' method='POST' action='#'>";

                         
 					form = form+                           

							"<table class='table table-hover'>"+
							      "<thead>"+
							        "<tr>"+
							          "<th>Extensiones</th>"+
							          "<th>Area</th>"+
							           "<th>Nombre</th>"+
							           "<th>E mail</th>"+
							           "<th>Skype</th>"+
							        "</tr>"+
							      "</thead>"+ "<tbody>";
                         
							        form = form+ "<tr>"+
							          "<td>"+arrCarritoActual[0]['extension']+"</td>"+
							          "<td>"+arrCarritoActual[0]['area']+"</td>"+
							          "<td>"+arrCarritoActual[0]['nombre']+"</td>"+
							          "<td>"+arrCarritoActual[0]['correoElectronico']+"</td>"+
							          "<td>"+arrCarritoActual[0]['skype']+"</td>"+
							          
							        "</tr>";
                          
                           
                          form = form + "</tbody>"+
							"</table>"+"</form>";
                          

                           $("#formulario").html(form);
                            
					        $("#extension").hide();
					       document.getElementById("nombre").value=" ";
					       document.getElementById("Extensiones_nombre").value=" ";
					     })

         	}else{
         		var id= $("#Extensiones_area").val();
         		         		
         			   $.post("<?php echo Yii::app()->request->baseUrl ?>/index.php?r=extensiones/cargar",{id: id},
					    function(data) {
					    	console.log(data);
					    	 var carritoActual = data;
					    	  var arrCarritoActual = $.parseJSON(carritoActual);
                          var form = "<form id='formulariocarrito' method='POST' action='#'>";

                         
 					form = form+                           

							"<table class='table table-hover'>"+
							      "<thead>"+
							        "<tr>"+
							          "<th>Extensiones</th>"+
							          "<th>Area</th>"+
							           "<th>Nombre</th>"+
							           "<th>E mail</th>"+
							           "<th>Skype</th>"+
							        "</tr>"+
							      "</thead>"+ "<tbody>";
                         
							        form = form+ "<tr>"+
							          "<td>"+arrCarritoActual[0]['extension']+"</td>"+
							          "<td>"+arrCarritoActual[0]['area']+"</td>"+
							          "<td>"+arrCarritoActual[0]['nombre']+"</td>"+
							          "<td>"+arrCarritoActual[0]['correoElectronico']+"</td>"+
							          "<td>"+arrCarritoActual[0]['skype']+"</td>"+
							          
							        "</tr>";
                          
                           
                          form = form + "</tbody>"+
							"</table>"+"</form>";
                          

                           $("#formulario").html(form);
                            
					        $("#extension").hide();
					        document.getElementById("area").value=" ";
					       document.getElementById("Extensiones_area").value=" ";
					      })
	         };
         
   
    	

    });



 });

</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'Extensiones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<div class="col-md-4"></div>
	
<div class="col-md-4">


	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'Buscar Por Nombre'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->nombre !='') {
                             $value = ($model->nombre);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'nombre', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'nombre',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarExtension'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Extensiones_nombre").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Extensiones_nombre").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'Buscar Por Cargo'); ?>
		<?php /*este metodo de abajo funciona para buscar todos las areas los cuales estan 
					relacionado con la tabla de municipio que tiene y asi poder listarlos por	letras*/
				if ($model->area !='') {
                             $value = ($model->area);
                         } else {
                             $value = '';
                         }
                         echo $form->hiddenField($model, 'area', array());

                      $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                             'name' => 'area',
                             'model' => $model,
                             'value' => $value,
                             'htmlOptions'=>array('class'=>'form-control'),
                             'sourceUrl' => $this->createUrl('ListarArea'),
                             'options' => array(
                                 'minLength' => '2',
                                 'showAnim' => 'fold',
                                 'select' => 'js:function(event, ui)
                          { jQuery("#Extensiones_area").val(ui.item["id"]); }',
                                 'search' => 'js:function(event, ui)
                          { jQuery("#Extensiones_area").val(0); }'
                             ),
                         ));

			?>
		<?php echo $form->error($model,'area'); ?>
	</div>

	<div align="center"  class="buttons" >
        <br>
        <?php echo CHtml::submitButton(' Buscar', array("class"=>"btn btn-primary btn-large" ,"id"=>"buscar")); ?>
	<br>
	</div>
	<br>
</div>
<div class="col-md-4"></div>
<?php $this->endWidget(); ?>

</div><!-- form -->



<div class="col-md-12" id="extension">
		<div class="bs-example">
		    <table class="table table-condensed">
		      <thead>
		        <tr>
		          <th>Extensiones</th>
		          <th>Area</th>
		          <th>Nombre</th>
		          <th>E mail</th>
		          <th>Skype</th>

		        </tr>
		      </thead>
<?php 
$modelExtensiones=Extensiones::model()->findAll();

for ($i=0; $i <count($modelExtensiones); $i++) { 

			?>
		
		      <tbody>
		        <tr>
		          <td><?php echo $modelExtensiones[$i]["extension"]; ?></td>
		          <td><?php echo $modelExtensiones[$i]["area"]; ?></td>
		          <td><?php echo $modelExtensiones[$i]["nombre"]; ?></td>
		          <td><?php echo $modelExtensiones[$i]["correoElectronico"]; ?></td>
		           <td><?php echo $modelExtensiones[$i]["skype"]; ?></td>

		        </tr>
		   
		      
		      </tbody>
		 	<?php

}
 ?>
   </table>
		  </div>
		</div>
			

			<div id="formulario">
				
			</div>

